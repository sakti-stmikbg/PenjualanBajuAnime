@extends('layout.bootstrap3.index')

@section('content')
<div class="container" style="margin-top: 50px; width: 435px;">
    <div class="row">
        <!--<div class="panel-body"></div>-->
        <br/>
        <div class="col-sm-10">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="glyphicon glyphicon-home"></i> 
                    <b>Edit Data</b>
                </div>
                <div class="panel-body">
                    <div class="container">
                    <form method="post" action="<?php echo URL::to('/produk/edit/proses'); ?>" class="form-horizontal" >
                        <input type="hidden" name="id" value="<?php echo $produk->id;?>">
                        <div class='form-group' >
                            <label>Nama Produk</label>
                            <input type='text' name="namaproduk" class="form-control" style="width: 300px;" value="<?php echo $produk->namaproduk; ?>">
                        </div>
                        <div class='form-group'>
                            <label>Jenis Kain</label>
                            <input type='text' name="jeniskain" class="form-control" style="width: 300px;" value="<?php echo $produk->jeniskain;?>">
                        </div>
                        <div class='form-group'>
                            <label>Warna</label>
                            <input type='text' name="warna" class="form-control" style="width: 300px;" value="<?php echo $produk->warna;?>">
                        </div>
                        <div class='form-group'>
                            <label>Ukuran</label>
                            <input type='text' name="ukuran" class="form-control" style="width: 300px;" value="<?php echo $produk->ukuran;?>">
                        </div>
                        <div class='form-group'>
                            <button type="submit" name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-save">Simpan</i></button>

                        </div>

                    </form>
                    @stop