<?php

namespace App\Http\Livewire\admin;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class AllUsers extends PowerGridComponent
{
    use ActionButton;

    public $name;
    public $email;
    public $phone;
    public $city;
    public $country;
    public $status;
    public $suspend;



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
     * @return Builder<\App\Models\User>
     */
    public function datasource(): Builder
    {
        return User::query();
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
        return [];
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
            ->addColumn('name')
            ->addColumn('username')
            ->addColumn('email')
            ->addColumn('phone')
            ->addColumn('country')
            ->addColumn('status')
            ->addColumn('balance', function (User $model) {
                return "$" . number_format(balance($model->id), 2);
            })

            ->addColumn('invest', function (User $model) {
                return "$" . number_format(totalActiveInvest($model->id), 2);
            })
            ->addColumn('direct', function (User $model) {
                return "$" . number_format(directInvestment($model->id), 2);
            })
            ->addColumn('level1', function (User $model) {
                return "$" . number_format(inDirectFirstInvestment($model->id), 2);
            })
            ->addColumn('level2', function (User $model) {
                return "$" . number_format(inDirectSecondInvestment($model->id), 2);
            })
            ->addColumn('level3', function (User $model) {
                return "$" . number_format(inDirectThirdInvestment($model->id), 2);
            })
            ->addColumn('business', function (User $model) {
                return "$" . number_format(downlineBusiness($model->id), 2);
            })
            ->addColumn('suspend')
            ->addColumn('refer')
            ->addColumn('role')
            ->addColumn('created_at_formatted', fn (User $model) => Carbon::parse($model->created_at)->format('d/m/Y H:i:s'))
            ->addColumn('updated_at_formatted', fn (User $model) => Carbon::parse($model->updated_at)->format('d/m/Y H:i:s'));
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
            Column::make('NAME', 'name')
                ->sortable()
                ->editOnClick()
                ->searchable()
                ->makeInputText(),

            Column::make('USERNAME', 'username')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('EMAIL', 'email')
                ->sortable()
                ->searchable()
                ->editOnClick()
                ->makeInputText(),

            Column::make('PHONE', 'phone')
                ->sortable()
                ->searchable()
                ->editOnClick()
                ->makeInputText(),

            Column::make('COUNTRY', 'country')
                ->sortable()
                ->searchable()
                ->editOnClick()
                ->makeInputText(),

            Column::make('STATUS', 'status')
                ->toggleable(),

            Column::make('BALANCE', 'balance'),
            Column::make('INVEST', 'invest'),
            Column::make('DIRECT', 'direct'),
            Column::make('LEVEL 1', 'level1'),
            Column::make('LEVEL 2', 'level2'),
            Column::make('BUSINESS', 'business'),

            Column::make('SUSPEND', 'suspend')
                ->toggleable(),


            Column::make('KYC', 'kyc_status')
                ->toggleable(),

            Column::make('SPONSER', 'refer')
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
     * PowerGrid User Action Buttons.
     *
     * @return array<int, Button>
     */


    public function actions(): array
    {
        return [
            //       Button::make('edit', 'Edit')
            //           ->class('bg-indigo-500 cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm')
            //           ->route('plan.edit', ['plan' => 'id']),

            Button::make('pin', 'PIN')
                ->class('btn btn-primary btn-sm')
                ->emit('pin', ['id' => 'id']),
            Button::make('unpin', 'UN-PIN')
                ->class('btn btn-success btn-sm')
                ->emit('unpin', ['id' => 'id'])
        ];
    }



    protected function getListeners()
    {
        return array_merge(
            parent::getListeners(),
            [
                'pin',
                'unpin',
            ]
        );
    }



    public function pin($id)
    {
        $method = User::find($id['id']);
        $method->pin = true;
        $method->save();
    }

    public function unpin($id)
    {
        $method = User::find($id['id']);
        $method->pin = false;
        $method->save();
    }



    public function onUpdatedEditable(string $id, string $field, string $value): void
    {
        User::query()->find($id)->update([
            $field => $value,
        ]);
    }


    public function onUpdatedToggleable(string $id, string $field, string $value): void
    {
        User::query()->find($id)->update([
            $field => $value,
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Rules
    |--------------------------------------------------------------------------
    | Enable the method below to configure Rules for your Table and Action Buttons.
    |
    */

    /**
     * PowerGrid User Action Rules.
     *
     * @return array<int, RuleActions>
     */


    public function actionRules(): array
    {
        return [

            //Hide button edit for ID 1
            Rule::button('pin')
                ->when(fn ($user) => $user->pin == true)
                ->hide(),

            //Hide button edit for ID 1
            Rule::button('unpin')
                ->when(fn ($user) => $user->pin == false)
                ->hide(),
        ];
    }
}
