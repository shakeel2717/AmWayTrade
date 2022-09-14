<?php

namespace App\Http\Livewire\admin;

use App\Mail\KycComplete;
use App\Models\Kyc;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Mail;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class AllKyc extends PowerGridComponent
{
    use ActionButton;

    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
    */
    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            Exportable::make('export')
                ->striped()
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Model or Collection
    |
    */

    /**
     * PowerGrid datasource.
     *
     * @return Builder<\App\Models\Kyc>
     */
    public function datasource(): Builder
    {
        return Kyc::query()->where('status', false);
    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */

    /**
     * Relationship search.
     *
     * @return array<string, array<int, string>>
     */
    public function relationSearch(): array
    {
        return [
            "User" => [
                'username'
            ]
        ];
    }

    /*
    |--------------------------------------------------------------------------
    |  Add Column
    |--------------------------------------------------------------------------
    | Make Datasource fields available to be used as columns.
    | You can pass a closure to transform/modify the data.
    |
    */
    public function addColumns(): PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('id')
            ->addColumn('username', function (Kyc $model) {
                return $model->user->username;
            })
            ->addColumn('category')
            ->addColumn('name')
            ->addColumn('front_img', function (Kyc $model) {
                return "<img class='w-32' src='/kyc/" . $model->front . "'>";
            })
            ->addColumn('back_img', function (Kyc $model) {
                return "<img class='w-32' src='/kyc/" . $model->back . "'>";
            })
            ->addColumn('status')
            ->addColumn('created_at_formatted', fn (Kyc $model) => Carbon::parse($model->created_at)->format('d/m/Y H:i:s'))
            ->addColumn('updated_at_formatted', fn (Kyc $model) => Carbon::parse($model->updated_at)->format('d/m/Y H:i:s'));
    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |
    */

    /**
     * PowerGrid Columns.
     *
     * @return array<int, Column>
     */
    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->makeInputRange(),

                Column::make('USERNAME', 'username')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('CATEGORY', 'category')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('NAME', 'name')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('NUMBER', 'number')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('FRONT', 'front_img')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('BACK', 'back_img')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('CREATED AT', 'created_at_formatted', 'created_at')
                ->searchable()
                ->sortable()
                ->makeInputDatePicker(),

        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable the method below only if the Routes below are defined in your app.
    |
    */

    /**
     * PowerGrid Kyc Action Buttons.
     *
     * @return array<int, Button>
     */


    public function actions(): array
    {
        return [
            //       Button::make('edit', 'Edit')
            //           ->class('bg-indigo-500 cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm')
            //           ->route('kyc.edit', ['kyc' => 'id']),

            Button::make('destroy', 'Delete')
                ->class('btn btn-danger btn-sm')
                ->emit('delete', ['id' => 'id']),

            Button::make('approve', 'Approve')
                ->class('btn btn-primary btn-sm')
                ->emit('approve', ['id' => 'id'])
        ];
    }




    protected function getListeners()
    {
        return array_merge(
            parent::getListeners(),
            [
                'delete',
                'approve',
            ]
        );
    }



    public function delete($id)
    {
        $method = Kyc::find($id['id']);
        $method->delete();
    }

    public function approve($id)
    {
        $method = Kyc::find($id['id']);
        $method->status = true;
        $method->save();

        
        
        $user = User::find($method->user_id);
        $user->kyc_status = true;
        $user->save();

        // sending email to user
        Mail::to($user->email)->send(new KycComplete());
    }




    /*

    public function onUpdatedEditable(string $id, string $field, string $value): void
    {
        Kyc::query()->find($id)->update([
            $field => $value,
        ]);
    }


    public function onUpdatedToggleable(string $id, string $field, string $value): void
    {
        Kyc::query()->find($id)->update([
            $field => $value,
        ]);
    }

    */




    /*
    |--------------------------------------------------------------------------
    | Actions Rules
    |--------------------------------------------------------------------------
    | Enable the method below to configure Rules for your Table and Action Buttons.
    |
    */

    /**
     * PowerGrid Kyc Action Rules.
     *
     * @return array<int, RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($kyc) => $kyc->id === 1)
                ->hide(),
        ];
    }
    */
}
