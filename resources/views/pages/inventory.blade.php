@extends('layouts.app', ['activePage' => 'inventory', 'title' => 'Thai-Tanic', 'navName' => 'Inventory', 'activeButton' => 'laravel'])

@section('content')
<div class="content" style="background-color: #252837;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card data-tables">

                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Inventory Management</h3>
                                <p class="text-sm mb-0">
                                    Add and Delete items.
                                </p>
                            </div>
                            <div class="col-4 text-right">
                                <a href="#" class="btn btn-sm btn-default">Add item</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-2">
                                                                            </div>

                    <div class="toolbar">
                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr><th>Product</th>
                                <th>Category</th>
                                <th>Order date</th>
                                <th>Quantity</th>
                            </tr></thead>
                            <tfoot>
                                <tr>
                                    <th>Product</th>
                                    <th>Category</th>
                                    <th>Order date</th>
                                    <th>Quantity</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            
                                     <tr>
                                        <td>Pasta</td>
                                        <td>Carbs</td>
                                        <td>2020-02-25 12:37:04</td>
                                        <td>50</td>
                                        <td class="d-flex justify-content-end">
                                                
                                                <a href="#"><i class="fa fa-edit"></i></a>
                                         </td>
                                    </tr>
                                    <tr>
                                        <td>Pasta</td>
                                        <td>Carbs</td>
                                        <td>2020-02-25 12:37:04</td>
                                        <td>50</td>
                                        <td class="d-flex justify-content-end">
                                                
                                                <a href="#"><i class="fa fa-edit"></i></a>
                                         </td>
                                    </tr>
                                    <tr>
                                        <td>Pasta</td>
                                        <td>Carbs</td>
                                        <td>2020-02-25 12:37:04</td>
                                        <td>50</td>
                                        <td class="d-flex justify-content-end">
                                                
                                                <a href="#"><i class="fa fa-edit"></i></a>
                                         </td>
                                    </tr>
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection