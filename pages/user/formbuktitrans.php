<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Form Bukti Transaksi</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="javascript:void(0)">Home</a>
            </li>
            
            <li class="breadcrumb-item active">Form Bukti Transaksi</li>
        </ol>
    </div>
    
</div>
<div class="container-fluid">
<div class="col-lg-12">
                        <div class="card card-outline-inverse">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">INFO</h4></div>
                            <div class="card-body">
                                <h3 class="card-title">Step by step Top Up Transfer</h3>
                                <p class="card-text">
                                1. Transfer Melalui Rekening Admin dibawah ini.
                                <p>2. Transfer Manual melalui ATM BNI dengan No. Rekening 073300 a.n Agus</p>
                                <p>3. Masukan Jumlah Transfer sesuai keinginan Top Up Saldo</p>
                                <p>4. Jangan lupa Foto struk bukti transfer</p>
                                <p>5. Selanjutnya Upload struk bukti Transfer melalui menu navigasi Top up with transfer</P>
                                <p>6. Lalu isi Form bukti transfer</p><code>*note proses top up dengan transfer hanya pada jam kerja petugas</code>
                                </p>
                                
                            </div>
                        </div>
</div>

<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Form Validation</h4>
                                <h6 class="card-subtitle">Form Upload Bukti Transfer</a></h6>
                                <form class="m-t-40" novalidate>
                                    <div class="form-group">
                                        <h5>Upload Bukti Transfer <span class="text-danger">*</span></h5>
                                        <div class="controls"<small> <code>Required</code> Rename file bukti transfer anda dengan no transaksi sebelum upload</small>
                                            <input type="file" name="upload" class="form-control" required> </div>
                                            <small>Size Foto Maksimal 1MB.</small>
                                    </div>

                                    <div class="form-group">
                                        <h5>Keterangan Bukti Transfer <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <textarea name="ket" id="ket" class="form-control" rows="5" required></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Masukan No.Transaksi<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="notrans" class="form-control" required data-validation-required-message="This field is required" required> </div>
                                        
                                        
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <h5>Tanggal Transfer <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="date" class="form-control" placeholder="dd/mm/yyyy" required> </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <h5>Jumlah Transfer <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="jumtrans" class="form-control" required data-validation-required-message="This field is required" required> </div>
                                        
                                        
                                    </div>
                                    
                                    <div class="text-xs-right">
                                        <button type="submit" class="btn btn-info">Submit</button>
                                        <button type="reset" class="btn btn-inverse">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
</div>