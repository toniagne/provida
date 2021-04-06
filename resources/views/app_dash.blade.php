@extends('layouts.employee')

@section('title', 'Page Title')

@section('content')

    <div class="card">
        <div class="card-header">
            <h4>Notificações</h4>
            <ul class="card-actions">
                <li>
                    <button type="button" data-toggle="card-action" data-action="refresh_toggle" data-action-mode="demo"><i class="ion-android-refresh"></i></button>
                </li>
                <li>
                    <button type="button" data-toggle="card-action" data-action="content_toggle"></button>
                </li>
            </ul>
        </div>
        <div class="card-block">
            <div class="pull-r-l pull-t m-b">
                <table class="card-table text-center bg-gray-lighter-o b-b">
                    <tbody>
                    <tr class="row">
                        <td class="col-xs-6 b-r">
                            <p class="h1">5</p>
                            <p class="h6 text-muted m-t-0">Novas notificações</p>
                        </td>
                        <td class="col-xs-6">
                            <i class="ion-android-notifications fa-3x text-muted"></i>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p><i class="ion-checkmark m-r-xs"></i><a class="alert-link" href="javascript:void(0)">#5510</a> Nome da empresa - Proposta aprovada</p>
            </div>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p><i class="ion-checkmark m-r-xs"></i><a class="alert-link" href="javascript:void(0)">#4433</a> Nome da empresa - Proposta aprovada.</p>
            </div>
            <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p><i class="ion-ios-information-outline m-r-xs"></i> <a class="alert-link" href="javascript:void(0)">#4333</a> Proposta em análise<a class="alert-link" href="javascript:void(0)">recado</a>!</p>
            </div>
        </div>
    </div>

@endsection
