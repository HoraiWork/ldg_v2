@extends('layouts.app')
@section('content')
    <main class="page-wrapper position-relative">
        <h1 class="sr-only">Страница настроек Лидогенератора</h1>
        @desktop
            <div class="row bg-white sticky-top">
            <script>let gridOffset = 144;</script>
        @elsedesktop
            <div class="row bg-white">
            <script>let gridOffset = 52;</script>
        @enddesktop
            <h2 class="sr-only">Блок навигации по страницам настроек и управления настройками страницы</h2>
            <div class="col-md-12 offset-block"></div>
            <div class="col-md-12 settings-wrapper font-weight-bold">
                @include('includes.lidogenerator-balance-links', ['step'=>'billing-finance'])
            </div>
            @include('includes.finance-settings', ['role'=> null])
        </div>
        @include('includes.finance-table', ['role'=>'billing'])
        @include('includes.modal.balance-modal')
        @include('includes.modal.bill-modal')
        @include('includes.modal.confirm-modal', [
            'messageHeader' => 'Отметить счет как оплаченный?',
            'modalId' => 'js-confirm-client-paid-modal'
            ])
        @include('includes.modal.confirm-modal', [
            'messageHeader' => 'Отметить счет как неоплаченный?',
            'modalId' => 'js-confirm-client-unpaid-modal'
            ])
    </main>
@stop
