@extends('layouts.master')

@section('content')

<div class="main">
    <div class="main-content" id="app">
        <div class="container-fluid">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">ChatBox</h3>
                    <!-- <p class="panel-subtitle">Period: Oct 14, 2016 - Oct 21, 2016</p> -->
                </div>
                <div class="panel-body" style="height: 400px; overflow:auto;">
                    <chating :key="texts.index" v-for="texts,index in text.pesan" :user=text.user[index]>@{{ texts }}</chating>
                </div>
            </div>
            <div class="panel">
                <div class="panel-footer">
                    <div class="input-group">
                        <input type="" class="form-control bg-color" v-model="input" @keyup.enter="push" placeholder="Ketik Disini...">
                        <span class="input-group-btn">
                            <button class="btn btn-warning" @click.prevent="push">Kirim</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
<style type="text/css">
    .chatcolor {
        background-color: #BEB0CC;
        padding: 10px;
        color: #F4F2F6;
        border-bottom-left-radius: 24px;
        border-bottom-right-radius: 28px;
        border-bottom-right-radius: 28px;
        margin-top: 6px;
    }
</style>