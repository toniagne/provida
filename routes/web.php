<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Unities;
use App\Http\Livewire\Positions;
use App\Http\Livewire\Exams;
use App\Http\Livewire\PositionExams;
use App\Http\Livewire\Empoyees;
use App\Http\Livewire\ClientTypes;
use App\Http\Livewire\Clients;
use App\Http\Livewire\Turnovers;
use App\Http\Livewire\Expenses;

Route::group(['prefix' => 'commands'], function(){

    Route::get('/artisan/{command}', function($command){

        try {
            \Illuminate\Support\Facades\Artisan::call($command);
        } catch(\Exception $e){
            dd($e->getMessage());
        }

        dd(\Illuminate\Support\Facades\Artisan::output());
    });


    Route::get('terminal/{command}', function($command) {
        $cli = new \Symfony\Component\Process\Process(['composer' => 'install']);
        $cli->run();

        dd($cli->getOutput());
    });

});

Route::group(['middleware'=>['auth:sanctum', 'verified']], function () {

    Route::get('/', function () {
        return view('dashboard');
    });

    Route::get('vendedor', function () {
        return view('app_dash');
    })->name('app.dash');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('unidades', Unities::class)->name('unidades');

    Route::get('cargos', Positions::class)->name('cargos');

    Route::get('exames', Exams::class)->name('exames');

    Route::get('exames_cargos', PositionExams::class)->name('exames_cargos');

    Route::get('employees', Empoyees::class)->name('employees');

    Route::get('tipo_cliente', ClientTypes::class)->name('client_types');

    Route::get('clientes', Clients::class)->name('clients');

    Route::get('rotatividade', Turnovers::class)->name('turnovers');

    Route::get('despesas', Expenses::class)->name('expanses');
});

