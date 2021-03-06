@extends('layouts.app')
@section('content')
    <main class="page-wrapper crm-main">
        @desktop
            <div class="row bg-white sticky-top">
            <script>let gridOffset = 144;</script>
        @elsedesktop
            <div class="row bg-white">
            <script>let gridOffset = 50;</script>
        @enddesktop
            <h1 class="sr-only">Страница заявок</h1>
            <h2 class="sr-only">Фильтр данных для таблицы заявок</h2>
            @include('includes.orders-directory-links', ['step'=>'crm', 'role'=>'client'])
            <div class="col-md-12 filter-wrapper">
                <div class="order-client-filter">
                    @include('includes.date-range', ['size'=>'small'])
                </div>
                <div class="orders-count-wrapper text-center">
                    <ul class="list-inline mb-0 d-flex justify-content-between">
                        <li class="list-inline-item bg-success text-white rounded targeted-orders-count"
                            data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                            title="Целевые заявки">
                            <p class="font-weight-bold mb-0 d-block">2415</p>
                        </li>
                        <li class="list-inline-item bg-danger text-white rounded inappropriate-orders-count"
                            data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                            title="Нецелевые заявки">
                            <p class="font-weight-bold mb-0 d-block">8477</p>
                        </li>
                    </ul>
                </div>
                <div class="order-buttons">
                    <a class="btn page-button" href="#" data-toggle="tooltip" data-placement="top"
                       data-delay='{"show":"1000", "hide":"1000"}' title="Экспорт заявок в Excel">
                        <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                    </a>
                    <button type="button" class="btn page-button show-toast"data-toggle="tooltip" data-placement="top"
                            data-delay='{"show":"1000", "hide":"1000"}'
                            title="Подробное описание условий того, какие заявки считаются целевыми и нецелевыми">
                        Описание условий </button>
                    <div class="toast crm-button js-order-description-toast">
                        <button type="button" class="close ml-2 mb-1 mr-1" data-dismiss="toast">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="toast-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Semper viverra nam libero justo laoreet sit
                                amet. Id aliquet lectus proin nibh nisl condimentum. Aliquam sem fringilla ut morbi
                                tincidunt augue interdum. Integer vitae justo eget magna fermentum iaculis eu.Lorem
                                ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Semper viverra nam libero justo laoreet sit
                                amet. Id aliquet lectus proin nibh nisl condimentum. Aliquam sem fringilla ut morbi
                                tincidunt augue interdum. Integer vitae justo eget magna fermentum iaculis eu.Lorem
                                ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Semper viverra nam libero justo laoreet sit
                                amet. Id aliquet lectus proin nibh nisl condimentum. Aliquam sem fringilla ut morbi
                                tincidunt augue interdum. Integer vitae justo eget magna fermentum iaculis eu.</p>
                            <p>Максимальный срок согласования заявки 7 дней</p>
                        </div>
                    </div>
                </div>
                @include('includes.search-form')
            </div>
        </div>
        @include('includes.orders-table', ['role'=>'client'])
        @include('includes.modal.balance-client-modal')
        @include('includes.modal.comment-modal', [
            'messageHeader' => 'Ваш комментарий',
            'messagePlaceholder' => 'Напишите Ваш комментарий'
        ])
        @include('includes.modal.bill-modal')
        @include('includes.modal.status-modal')
    </main>
@stop
