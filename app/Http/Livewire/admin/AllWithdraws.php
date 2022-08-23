<?php

namespace App\Http\Livewire\admin;

use App\Models\Transaction;
use App\Models\Withdraw;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class AllWithdraws extends PowerGridComponent
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
     * @return Builder<\App\Models\Transaction>
     */
    public function datasource(): Builder
    {
        return Transaction::query()->where('type', 'withdraw')->where('status', true);
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
            ->addColumn('username', function (Transaction $model) {
                return $model->user->username;
            })
            ->addColumn('type')
            ->addColumn('amount')
            ->addColumn('sum')
            ->addColumn('note')
            ->addColumn('reference')
            ->addColumn('created_at_formatted', fn (Transaction $model) => Carbon::parse($model->created_at)->format('d/m/Y H:i:s'))
            ->addColumn('updated_at_formatted', fn (Transaction $model) => Carbon::parse($model->updated_at)->format('d/m/Y H:i:s'));
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

            Column::make('USERNAME', 'username')
                ->sortable()
                ->searchable()
                ->makeInputText(),


            Column::make('TYPE', 'type')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('AMOUNT', 'amount')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('REFERENCE', 'reference')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('CREATED AT', 'created_at_formatted', 'created_at')
                ->searchable()
                ->sortable()
                ->makeInputDatePicker(),

            Column::make('UPDATED AT', 'updated_at_formatted', 'updated_at')
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
     * PowerGrid Transaction Action Buttons.
     *
     * @return array<int, Button>
     */


    public function actions(): array
    {
        return [
            //       Button::make('edit', 'Edit')
            //           ->class('bg-indigo-500 cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm')
            //           ->route('transaction.edit', ['transaction' => 'id']),

            Button::make('destroy', 'Refund')
                ->class('btn btn-danger btn-sm')
                ->emit('delete', ['id' => 'id'])
        ];
    }




    protected function getListeners()
    {
        return array_merge(
            parent::getListeners(),
            [
                'delete',
            ]
        );
    }



    public function delete($id)
    {
        $method = transaction::find($id['id']);
        $withdraw = Withdraw::find($method->note);
        $withdraw->delete();
        $withdraw = transaction::where('type', 'withdrawals fees ')->where('note', $method->note);
        $withdraw->delete();
        $method->delete();
    }


    /*

    public function onUpdatedEditable(string $id, string $field, string $value): void
    {
        transaction::query()->find($id)->update([
            $field => $value,
        ]);
    }


    public function onUpdatedToggleable(string $id, string $field, string $value): void
    {
        transaction::query()->find($id)->update([
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
     * PowerGrid Transaction Action Rules.
     *
     * @return array<int, RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($transaction) => $transaction->id === 1)
                ->hide(),
        ];
    }
    */
}
