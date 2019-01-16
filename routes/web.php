<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::post("/login", "AdministratorController@authenticate")->name("login");
Route::post("/", "AdministratorController@doLogout()")->name("logout");


Route::group(["prefix" => "administrator", "middleware" => "auth"], function(){
    Route::get("/", "AdministratorController@index")->name("admin.dashboard");
    Route::get('/branches', 'BranchController@index')->name("admin.branches");
    Route::post('/branch/save', 'BranchController@store')->name("admin.branch.save");
    Route::get('/branch/edit/{id}', 'BranchController@edit')->name("admin.branch.edit");
    Route::post('/update', 'BranchController@update')->name("admin.branch.update");
    Route::get('/branch/delete{id}', 'BranchController@destroy')->name("admin.branch.delete");
    
    Route::get('/inventories', 'InventoryController@index')->name("admin.inventories");
    Route::get('/inventory/create', 'InventoryController@create')->name("admin.inventory.create");
    Route::get('/inventory/show', 'InventoryController@create')->name("admin.inventory.show");
    Route::post('/inventory/save', 'InventoryController@store')->name("admin.inventory.save");
    Route::get('/inventory/edit/{ProductId}', 'InventoryController@edit')->name("admin.inventory.edit");
    Route::post('/updating', 'InventoryController@update')->name("admin.inventory.updating");
    Route::get('/inventory/delete/{ProductId}', 'InventoryController@destroy')->name("admin.inventory.delete");
    Route::get('/inventory/branch/branchinventory', 'BranchController@branchInventory')->name("admin.branchinventory");
    Route::get('/inventory/branch/diaplayinventory/{bcode}', 'BranchController@displayInventory')
        ->name("admin.diaplayinventory");
    Route::get('/inventory/branch/inventorydetails/{ProductId}', 'InventoryController@seeinventory')
        ->name("admin.inventorydetails");
    
    Route::get('/orders', 'OrderController@index')->name("admin.orders");
    Route::get('/order/orderdetails/{ProductCode}', 'BranchController@displayBranchAdminOrderDetails')
    ->name("admin.order.details");

    Route::get('/staffs', 'UserController@index')->name("admin.staffs");
    Route::get('/staff/create', 'UserController@create')->name("admin.staffs.create");
    Route::post('/staff/save', 'UserController@store')->name("admin.staff.save");
    Route::get('/staff/delete/{id}', 'UserController@destroy')->name("admin.staff.delete");
    Route::post('/updating', 'UserController@update')->name("admin.staff.updating");
    Route::get('/staff/edit/{id}', 'UserController@edit')->name("admin.staff.edit");
    Route::get('/staff/transferstaff/{id}', 'UserController@transferstaff')->name("admin.staff.transfer");
    Route::post('/update', 'UserController@updatestafftransfer')->name("admin.staff.transfer.update");
    
});

Route::group(["prefix" => "branchmanager", "middleware" => "auth"], function(){
    Route::get("/", "AdministratorController@managerindex")->name("manager.dashboard");
    Route::get("/inventories/{bcode}", "BranchController@displayBranchInventory")->name("manager.inventory.dashboard");
    Route::get('/inventory/inventorydetails/{ProductId}', 'InventoryController@seebranchinventory')
    ->name("manager.inventorydetails");
    Route::get("/orders/{bcode}", "BranchController@displayBranchOrder")->name("manager.order.dashboard");
    Route::get('/order/orderdetails/{bcode}', 'BranchController@displayBranchOrderDetails')
    ->name("manager.order.details");
    Route::get("/staffs/{bcode}", "BranchController@displayBranchStaffDetails")->name("manager.staff.dashboard");
});

Route::group(["prefix" => "salesgirl", "middleware" => "auth"], function(){
    Route::get("/", "AdministratorController@index")->name("salesgirl.dashboard");
   
});






