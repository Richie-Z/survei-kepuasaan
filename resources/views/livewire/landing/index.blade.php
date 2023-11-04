<div class="container" style="margin:4rem">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title" style="text-align:center">Survei Kepuasan RS Tjitrowardojo Kabupaten Purworejo
            </h5>
            <ul class="nav nav-tabs" id="myTab" role="tablist" style="margin: 2rem -1rem">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                        type="button" role="tab" aria-controls="home-tab-pane"
                        aria-selected="true">Identitas</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                        type="button" role="tab" aria-controls="profile-tab-pane"
                        aria-selected="false">Pertanyaan</button>
                </li>
            </ul>
            <form class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                    tabindex="0">
                    <div class="form-group mb-3">
                        <b>Nama Anda :</b>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group mb-3">
                        <b>Nomor Hp :</b>
                        <input type="text" class="form-control" name="phone_number">
                    </div>
                    <div class="form-group mb-3">
                        <b>Jenis Kelamin:</b>
                        <select name="gender" id="" class="form-select">
                            <option value="l">Laki-Laki</option>
                            <option value="p">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <b>Usia Anda:</b>
                        <select id="usia" name="age" class="form-select" required="">
                            <option value="" disabled="" selected="">Pilih Usia Anda...</option>
                            <option value="1">Kurang dari 20 Tahun</option>
                            <option value="2">21 Sampai 25 Tahun</option>
                            <option value="3">26 Sampai 30 Tahun</option>
                            <option value="4">31 Sampai 35 Tahun</option>
                            <option value="5">36 Sampai 40 Tahun</option>
                            <option value="6">41 Sampai 45 Tahun</option>
                            <option value="7">46 Sampai 50 Tahun</option>
                            <option value="8">55 Sampai 60 Tahun</option>
                            <option value="9">Lebih dari 60 Tahun</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <b>Pendidikan:</b>
                        <select id="pendidikan" name="education" class="form-select" required="">
                            <option value="" disabled="" selected="">Pilih Pendidikan Terakhir
                                Anda...</option>
                            <option value="1">SD</option>
                            <option value="2">SMP</option>
                            <option value="3">SMA</option>
                            <option value="4">DIPLOMA 3</option>
                            <option value="5">SARJANA</option>
                            <option value="6">PASCASARJANA / LEBIH</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <b>Pekerjaan:</b>
                        <select id="pendidikan" name="job" class="form-select" required="">
                            <option value="" disabled="" selected="">Pilih Pekerjaan Anda...
                            </option>
                            <option value="1">PNS</option>
                            <option value="2">TNI</option>
                            <option value="3">POLRI</option>
                            <option value="4">Swasta</option>
                            <option value="5">Wiraswasta</option>
                            <option value="6">Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <b>Masukkan Pekerjaan Lainnya</b>
                        <input type="text" class="form-control" name="other_job">
                    </div>
                    <div class="form-group ">
                        <b>Jenis Layanan:</b>
                        <select id="pendidikan" name="service_type" class="form-select" required="">
                            <option value="" disabled="" selected="">Pilih Jenis Layanan...
                            </option>
                            <option value="1">Rawat Jalan</option>
                            <option value="2">Rawat Inap</option>
                            <option value="3">IGD</option>
                            <option value="4">Instalasi Farmasi</option>
                            <option value="5">Instalasi Rehabilitas Medik</option>
                            <option value="6">Laboratorium</option>
                            <option value="7">Instalasi Radiologi</option>
                            <option value="8">Ruang Bersalin dan Peristi</option>
                            <option value="9">Bagian Administrasi</option>
                        </select>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                    tabindex="0">
                    <div class="form-group mb-3">
                        <p>1. Bagaimana pendapat Saudara tentang kesesuaian persyaratan pelayanan dengan jenis
                            pelayanannya</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Tidak Sesuai
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                                value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                Kurang Sesuai
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                                value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                Sesuai
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                                value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                Sangat Sesuai
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                                value="lainnya">
                            <input type="text" placeholder="Lainnya">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
