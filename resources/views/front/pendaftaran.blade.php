@extends('front.layouts.app')
@section('title', 'PPDB Ad-Dimyati | ')
@section('content')

@if(session('page'))
@endif
<div class="lg:w-1/2 lg:mx-auto">
    <div class="w-full h-fit bg-lime-700 rounded-b-full">
        <div class="container mx-auto px-2 sm:px-6 lg:px-8 pt-6 pb-5 mb-6">
            <div class="flex flex-col items-center justify-center">
                <h1 class="text-sm font-bold text-white text-center">Formulir Pendaftaran Siswa Baru</h1>
                <h1 class="text-base font-bold text-white text-center">SMK Terpadu Ad-Dimyati</h1>
                <h1 class="text-xs font-bold text-white text-center">Tahun Pelajaran 2021/2022</h1>
            </div>
        </div>
    </div>
    <form method="POST" action="#" enctype="multipart/form-data" id="formPendaftaran">
    @csrf
    <div class="page0 h-screen"></div>
    <div class="mb-3 px-8 formPage1 hidden">
        <h1 class="text-base font-bold text-emerald-800 mb-3">Informasi Pribadi</h1>
        <div class="mb-3">
            <label for="nama_lengkap" class="block text-sm font-medium text-gray-700">Nama Lengkap<span class="text-xs text-red-800">*</span></label>
            <div class="mt-1">
                <input type="text" name="nama_lengkap" id="nama_lengkap" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Masukkan nama lengkap" value="{{ old('nama_lengkap') }}">
            </div>
            @if($errors->has('nama_lengkap'))
                <div class="text-xs mt-1 text-red-500">{{ $errors->first('nama_lengkap') }}</div>
            @endif
        </div>
        <div class="mb-3">
            <label for="nik" class="block text-sm font-medium text-gray-700">NIK<span class="text-xs text-red-800">*</span></label>
            <div class="mt-1">
                <input type="number" name="nik" id="nik" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Masukkan NIK" value="{{ old('nik') }}">
            </div>
            <div class="text-xs mt-1" id="nikError">
            @if($errors->has('nik'))
                <span class="text-red-500">{{ $errors->first('nik') }}</span>
            @endif
            </div>
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir<span class="text-xs text-red-800">*</span></label>
            <div class="mt-1">
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('tanggal_lahir') }}">
            </div>
            @if($errors->has('tanggal_lahir'))
                <div class="text-xs mt-1 text-red-500">{{ $errors->first('tanggal_lahir') }}</div>
            @endif
        </div>
        {{-- tempat lahir --}}
        <div class="mb-3">
            <label for="tempat_lahir" class="block text-sm font-medium text-gray-700">Tempat Lahir<span class="text-xs text-red-800">*</span></label>
            <div class="mt-1">
                <input type="text" name="tempat_lahir" id="tempat_lahir" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Masukkan tempat lahir" value="{{ old('tempat_lahir') }}">
            </div>
            @if($errors->has('tempat_lahir'))
                <div class="text-xs mt-1 text-red-500">{{ $errors->first('tempat_lahir') }}</div>
            @endif
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700">Jenis Kelamin<span class="text-xs text-red-800">*</span></label>
            <div class="mt-1">
                <select name="jenis_kelamin" id="jenis_kelamin" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="l" @if(old('jenis_kelamin') == 'l') selected @endif>
                        Laki-laki
                    </option>
                    <option value="p" @if(old('jenis_kelamin') == 'p') selected @endif>
                        Perempuan
                    </option>
                </select>
            </div>
            @if($errors->has('jenis_kelamin'))
                <div class="text-xs mt-1 text-red-500">{{ $errors->first('jenis_kelamin') }}</div>
            @endif
        </div>
        <div class="mb-3">
            <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat<span class="text-xs text-red-800">*</span></label>
            <div class="grid grid-cols-2 gap-2 mt-1">
                <div class="col-span-2">
                    <input type="text" name="kecamatan" id="kecamatan" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Kecamatan" value="{{ old('kecamatan') }}">
                    @if($errors->has('kecamatan'))
                        <div class="text-xs mt-1 text-red-500">{{ $errors->first('kecamatan') }}</div>
                    @endif
                </div>
                <div class="col-span-2">
                    <input type="text" name="kota" id="kota" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Kota" value="{{ old('kota') }}">
                    @if($errors->has('kota'))
                        <div class="text-xs mt-1 text-red-500">{{ $errors->first('kota') }}</div>
                    @endif
                </div>
                <div class="col-span-2">
                    <input type="text" name="provinsi" id="provinsi" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Provinsi" value="{{ old('provinsi') }}">
                    @if($errors->has('provinsi'))
                        <div class="text-xs mt-1 text-red-500">{{ $errors->first('provinsi') }}</div>
                    @endif
                </div>
                <div class="col-span-2">
                    <input type="text" name="desa" id="desa" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Desa" value="{{ old('desa') }}">
                    @if($errors->has('desa'))
                        <div class="text-xs mt-1 text-red-500">{{ $errors->first('desa') }}</div>
                    @endif
                </div>
                <div>
                    <input type="text" name="rt" id="rt" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="RT" value="{{ old('rt') }}">
                    @if($errors->has('rt'))
                        <div class="text-xs mt-1 text-red-500">{{ $errors->first('rt') }}</div>
                    @endif
                </div>
                <div>
                    <input type="text" name="rw" id="rw" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="RW" value="{{ old('rw') }}">
                    @if($errors->has('rw'))
                        <div class="text-xs mt-1 text-red-500">{{ $errors->first('rw') }}</div>
                    @endif
                </div>
                <div class="col-span-2">
                    <input type="text" name="jalan" id="jalan" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Jalan" value="{{ old('jalan') }}">
                    @if($errors->has('jalan'))
                        <div class="text-xs mt-1 text-red-500">{{ $errors->first('jalan') }}</div>
                    @endif
                </div>
                {{-- gang --}}
                <div class="col-span-2">
                    <input type="text" name="gang" id="gang" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Gang/komplek" value="{{ old('gang') }}">
                    @if($errors->has('gang'))
                        <div class="text-xs mt-1 text-red-500">{{ $errors->first('gang') }}</div>
                    @endif
                </div>
                <div class="col-span-1">
                    <input type="text" name="no_rumah" id="no_rumah" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="No Rumah" value="{{ old('no_rumah') }}">
                    @if($errors->has('no_rumah'))
                        <div class="text-xs mt-1 text-red-500">{{ $errors->first('no_rumah') }}</div>
                    @endif
                </div>
                <div>
                    <input type="text" name="kode_pos" id="kode_pos" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Kode Pos" value="{{ old('kode_pos') }}">
                    @if($errors->has('kode_pos'))
                        <div class="text-xs mt-1 text-red-500">{{ $errors->first('kode_pos') }}</div>
                    @endif
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="agama" class="block text-sm font-medium text-gray-700">Agama<span class="text-xs text-red-800">*</span></label>
            <div class="mt-1">
                <input type="text" name="agama" id="agama" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Masukkan agama" value="{{ old('agama') }}">
            </div>
            @if($errors->has('agama'))
                <div class="text-xs mt-1 text-red-500">{{ $errors->first('agama') }}</div>
            @endif
        </div>
        <div class="mb-3">
            <label for="no_hp" class="block text-sm font-medium text-gray-700">No HP (Whatsapp)<span class="text-xs text-red-800">*</span></label>
            <div class="mt-1">
                <input type="number" name="no_hp" id="no_hp" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Masukkan no hp Whatsapp" value="{{ old('no_hp') }}">
            </div>
            @if($errors->has('no_hp'))
                <div class="text-xs mt-1 text-red-500">{{ $errors->first('no_hp') }}</div>
            @endif
        </div>
    </div>
    <div class="mb-3 px-8 formPage2 hidden">
        <div class="mb-3">
            <label for="saudara" class="block text-sm font-medium text-gray-700">Jumlah Saudara<span class="text-xs text-red-800">*</span></label>
            <div class="grid grid-cols-2 gap-2 mt-1">
                <div class="col-span-1">
                    <input type="number" name="saudara" id="saudara_kandung" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('saudara') }}" placeholder="Sodara kandung">
                    @if($errors->has('saudara'))
                        <div class="text-xs mt-1 text-red-500">{{ $errors->first('saudara') }}</div>
                    @endif
                </div>
                <div class="col-span-1">
                    <input type="number" name="saudara_tiri" id="saudara_tiri" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('saudara_tiri') }}" placeholder="Sodara tiri">
                    @if($errors->has('saudara_tiri'))
                        <div class="text-xs mt-1 text-red-500">{{ $errors->first('saudara_tiri') }}</div>
                    @endif
                </div>
                {{-- sudah sekolah --}}
                <div class="col-span-1">
                    <input type="number" name="sudah_sekolah" id="sudah_sekolah" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('sudah_sekolah') }}" placeholder="sudah sekolah">
                    @if($errors->has('sudah_sekolah'))
                        <div class="text-xs mt-1 text-red-500">{{ $errors->first('sudah_sekolah') }}</div>
                    @endif
                </div>
                {{-- belum sekolah --}}
                <div class="col-span-1">
                    <input type="number" name="belum_sekolah" id="belum_sekolah" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('belum_sekolah') }}" placeholder="belum sekolah">
                    @if($errors->has('belum_sekolah'))
                        <div class="text-xs mt-1 text-red-500">{{ $errors->first('belum_sekolah') }}</div>
                    @endif
                </div>
                <span class="text-xs text-gray-500 col-span-2">
                    *Jika tidak ada, isi dengan - (strip)
                </span>
            </div>
        </div>
        <h1 class="text-base font-bold text-emerald-800 mb-3">Identitas Orang Tua</h1>
        <div class="mb-3">
            <label for="nama_ayah" class="block text-sm font-medium text-gray-700">Nama Orang Tua<span class="text-xs text-red-800">*</span></label>
            <div class="grid grid-cols-2 gap-2 mt-1">
                <div class="col-span-2">
                    <input type="text" name="nama_ayah" id="nama_ayah" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('nama_ayah') }}" placeholder="Ayah">
                    @if($errors->has('nama_ayah'))
                        <div class="text-xs mt-1 text-red-500">{{ $errors->first('nama_ayah') }}</div>
                    @endif
                </div>
                <div class="col-span-2">
                    <input type="text" name="nama_ibu" id="nama_ibu" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('nama_ibu') }}" placeholder="Ibu">
                    @if($errors->has('nama_ibu'))
                        <div class="text-xs mt-1 text-red-500">{{ $errors->first('nama_ibu') }}</div>
                    @endif
                </div>
            </div>
        </div>
        {{-- pendidikan Orang Tua --}}
        <div class="mb-3">
            <label for="pendidikan_ayah" class="block text-sm font-medium text-gray-700">Pendidikan Orang Tua<span class="text-xs text-red-800">*</span></label>
            <div class="grid grid-cols-2 gap-2 mt-1">
                <div class="col-span-2">
                    <select name="pendidikan_ayah" id="pendidikan_ayah" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md">
                        <option value="">Pilih Pendidikan Ayah</option>
                        <option value="sd" @if(old('pendidikan_ayah') == 'sd') selected @endif>
                            SD
                        </option>
                        <option value="smp" @if(old('pendidikan_ayah') == 'smp') selected @endif>
                            SMP
                        </option>
                        <option value="sma" @if(old('pendidikan_ayah') == 'sma') selected @endif>
                            SMA
                        </option>
                        <option value="s1" @if(old('pendidikan_ayah') == 's1') selected @endif>
                            S1
                        </option>
                        <option value="s2" @if(old('pendidikan_ayah') == 's2') selected @endif>
                            S2
                        </option>
                        <option value="s3" @if(old('pendidikan_ayah') == 's3') selected @endif>
                            S3
                        </option>
                    </select>
                    @if($errors->has('pendidikan_ayah'))
                        <div class="text-xs mt-1 text-red-500">{{ $errors->first('pendidikan_ayah') }}</div>
                    @endif
                </div>
                <div class="col-span-2">
                    <select name="pendidikan_ibu" id="pendidikan_ibu" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md">
                        <option value="">Pilih Pendidikan Ibu</option>
                        <option value="sd" @if(old('pendidikan_ayah') == 'sd') selected @endif>
                            SD
                        </option>
                        <option value="smp" @if(old('pendidikan_ayah') == 'smp') selected @endif>
                            SMP
                        </option>
                        <option value="sma" @if(old('pendidikan_ayah') == 'sma') selected @endif>
                            SMA
                        </option>
                        <option value="s1" @if(old('pendidikan_ayah') == 's1') selected @endif>
                            S1
                        </option>
                        <option value="s2" @if(old('pendidikan_ayah') == 's2') selected @endif>
                            S2
                        </option>
                        <option value="s3" @if(old('pendidikan_ayah') == 's3') selected @endif>
                            S3
                        </option>
                    </select>
                    @if($errors->has('pendidikan_ibu'))
                        <div class="text-xs mt-1 text-red-500">{{ $errors->first('pendidikan_ibu') }}</div>
                    @endif
                </div>
            </div>
        </div>
        {{-- pekerjaan orang tua --}}
        <div class="mb-3">
            <label for="pekerjaan_ayah" class="block text-sm font-medium text-gray-700">Pekerjaan Orang Tua<span class="text-xs text-red-800">*</span></label>
            <div class="grid grid-cols-2 gap-2 mt-1">
                <div class="col-span-2">
                    <input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('pekerjaan_ayah') }}" placeholder="Ayah">
                    @if($errors->has('pekerjaan_ayah'))
                        <div class="text-xs mt-1 text-red-500">{{ $errors->first('pekerjaan_ayah') }}</div>
                    @endif
                </div>
                <div class="col-span-2">
                    <input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('pekerjaan_ibu') }}" placeholder="Ibu">
                    @if($errors->has('pekerjaan_ibu'))
                        <div class="text-xs mt-1 text-red-500">{{ $errors->first('pekerjaan_ibu') }}</div>
                    @endif
                </div>
            </div>
        </div>
        {{-- agama orang tua --}}
        <div class="mb-3">
            <label for="agama_ayah" class="block text-sm font-medium text-gray-700">Agama Orang Tua<span class="text-xs text-red-800">*</span></label>
            <div class="grid grid-cols-2 gap-2 mt-1">
                <div class="col-span-2">
                    <input type="text" name="agama_ayah" id="agama_ayah" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('agama_ayah') }}" placeholder="Ayah">
                    @if($errors->has('agama_ayah'))
                        <div class="text-xs mt-1 text-red-500">{{ $errors->first('agama_ayah') }}</div>
                    @endif
                </div>
                <div class="col-span-2">
                    <input type="text" name="agama_ibu" id="agama_ibu" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('agama_ibu') }}" placeholder="Ibu">
                    @if($errors->has('agama_ibu'))
                        <div class="text-xs mt-1 text-red-500">{{ $errors->first('agama_ibu') }}</div>
                    @endif
                </div>
            </div>
        </div>
        {{-- tanggungan keluarga --}}
        <div class="mb-3">
            <label for="tanggungan_keluarga" class="block text-sm font-medium text-gray-700">Tanggungan Keluarga<span class="text-xs text-red-800">*</span></label>
            <div class="grid grid-cols-2 gap-2 mt-1">
                <div class="col-span-2">
                    <input type="number" name="tanggungan_keluarga" id="tanggungan_keluarga" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('tanggungan_keluarga') }}" placeholder="jml tanggungan">
                    @if($errors->has('tanggungan_keluarga'))
                        <div class="text-xs mt-1 text-red-500">{{ $errors->first('tanggungan_keluarga') }}</div>
                    @endif
                </div>
            </div>
        </div>
        {{-- wali --}}
        {{-- cekbox --}}
        <div class="mb-2">
            <input type="checkbox" name="walicek" id="walicekbox" class="wali">
            <label for="walicekbox" class="text-sm text-gray-500">Memiliki Wali</label>
        </div>
        <div class="mb-3 walifield hidden">
            <label for="nama_wali" class="block text-sm font-medium text-gray-700">Informasi Wali</label>
            <span class="text-xs text-gray-500">
                *Isi jika orang tua sudah tidak ada
            </span>
            <div class="grid grid-cols-2 gap-2 mt-1">
                <div class="col-span-2">
                    <input type="text" name="nama_wali" id="nama_wali" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('nama_wali') }}" placeholder="Nama Wali">
                    @if($errors->has('nama_wali'))
                        <div class="text-xs mt-1 text-red-500">{{ $errors->first('nama_wali') }}</div>
                    @endif
                </div>
                {{-- pendidikan wali --}}
                <div class="col-span-2">
                    <select name="pendidikan_wali" id="pendidikan_wali" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md">
                        <option value="">Pilih Pendidikan Wali</option>
                        <option value="sd" @if(old('pendidikan_wali') == 'sd') selected @endif>
                            SD
                        </option>
                        <option value="smp" @if(old('pendidikan_wali') == 'smp') selected @endif>
                            SMP
                        </option>
                        <option value="sma" @if(old('pendidikan_wali') == 'sma') selected @endif>
                            SMA
                        </option>
                        <option value="s1" @if(old('pendidikan_wali') == 's1') selected @endif>
                            S1
                        </option>
                        <option value="s2" @if(old('pendidikan_wali') == 's2') selected @endif>
                            S2
                        </option>
                        <option value="s3" @if(old('pendidikan_wali') == 's3') selected @endif>
                            S3
                        </option>
                    </select>
                    @if($errors->has('pendidikan_wali'))
                        <div class="text-xs mt-1 text-red-500">{{ $errors->first('pendidikan_wali') }}</div>
                    @endif
                </div>
                {{-- pekerjaan wali --}}
                <div class="col-span-2">
                    <input type="text" name="pekerjaan_wali" id="pekerjaan_wali" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('pekerjaan_wali') }}" placeholder="Pekerjaan Wali">
                    @if($errors->has('pekerjaan_wali'))
                        <div class="text-xs mt-1 text-red-500">{{ $errors->first('pekerjaan_wali') }}</div>
                    @endif
                </div>
                {{-- agama wali --}}
                <div class="col-span-2">
                    <input type="text" name="agama_wali" id="agama_wali" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('agama_wali') }}" placeholder="Agama Wali">
                    @if($errors->has('agama_wali'))
                        <div class="text-xs mt-1 text-red-500">{{ $errors->first('agama_wali') }}</div>
                    @endif
                </div>
                <div class="col-span-2">
                    <label class="block text-xs font-medium text-gray-700">Alamat Wali</label>
                    <div class="grid grid-cols-2 gap-2 mt-1">
                        <div class="col-span-2">
                            <input type="text" name="wali_kecamatan" id="wali_kecamatan" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Kecamatan" value="{{ old('wali_kecamatan') }}">
                            @if($errors->has('wali_kecamatan'))
                                <div class="text-xs mt-1 text-red-500">{{ $errors->first('wali_kecamatan') }}</div>
                            @endif
                        </div>
                        <div class="col-span-2">
                            <input type="text" name="wali_kota" id="wali_kota" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Kota" value="{{ old('wali_kota') }}">
                            @if($errors->has('wali_kota'))
                                <div class="text-xs mt-1 text-red-500">{{ $errors->first('wali_kota') }}</div>
                            @endif
                        </div>
                        <div class="col-span-2">
                            <input type="text" name="wali_provinsi" id="wali_provinsi" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Provinsi" value="{{ old('wali_provinsi') }}">
                            @if($errors->has('wali_provinsi'))
                                <div class="text-xs mt-1 text-red-500">{{ $errors->first('wali_provinsi') }}</div>
                            @endif
                        </div>
                        <div class="col-span-2">
                            <input type="text" name="wali_desa" id="wali_desa" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Desa" value="{{ old('wali_desa') }}">
                            @if($errors->has('wali_desa'))
                                <div class="text-xs mt-1 text-red-500">{{ $errors->first('wali_desa') }}</div>
                            @endif
                        </div>
                        <div>
                            <input type="text" name="wali_rt" id="wali_rt" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="RT" value="{{ old('wali_rt') }}">
                            @if($errors->has('wali_rt'))
                                <div class="text-xs mt-1 text-red-500">{{ $errors->first('wali_rt') }}</div>
                            @endif
                        </div>
                        <div>
                            <input type="text" name="wali_rw" id="wali_rw" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="RW" value="{{ old('wali_rw') }}">
                            @if($errors->has('wali_rw'))
                                <div class="text-xs mt-1 text-red-500">{{ $errors->first('wali_rw') }}</div>
                            @endif
                        </div>
                        <div class="col-span-2">
                            <input type="text" name="wali_jalan" id="wali_jalan" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Jalan" value="{{ old('wali_jalan') }}">
                            @if($errors->has('wali_jalan'))
                                <div class="text-xs mt-1 text-red-500">{{ $errors->first('wali_jalan') }}</div>
                            @endif
                        </div>
                        {{-- gang --}}
                        <div class="col-span-2">
                            <input type="text" name="wali_gang" id="wali_gang" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Gang/komplek" value="{{ old('wali_gang') }}">
                            @if($errors->has('wali_gang'))
                                <div class="text-xs mt-1 text-red-500">{{ $errors->first('wali_gang') }}</div>
                            @endif
                        </div>
                        <div class="col-span-1">
                            <input type="text" name="wali_no_rumah" id="wali_no_rumah" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="No Rumah" value="{{ old('wali_no_rumah') }}">
                            @if($errors->has('wali_no_rumah'))
                                <div class="text-xs mt-1 text-red-500">{{ $errors->first('wali_no_rumah') }}</div>
                            @endif
                        </div>
                        <div>
                            <input type="text" name="wali_kode_pos" id="wali_kode_pos" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Kode Pos" value="{{ old('wali_kode_pos') }}">
                            @if($errors->has('wali_kode_pos'))
                                <div class="text-xs mt-1 text-red-500">{{ $errors->first('wali_kode_pos') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-3 px-8 formPage3 hidden">
        <h1 class="text-base font-bold text-emerald-800 mb-3">Informasi Akademik</h1>
        <div class="mb-3">
            <label for="nisn" class="block text-sm font-medium text-gray-700">NISN</label>
            <div class="mt-1">
                <input type="number" name="nisn" id="nisn" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Masukkan NISN" value="{{ old('nisn') }}">
            </div>
            @if($errors->has('nisn'))
                <div class="text-xs mt-1 text-red-500">{{ $errors->first('nisn') }}</div>
            @endif
        </div>
        <div class="mb-3">
            <label for="asal_sekolah" class="block text-sm font-medium text-gray-700">Asal Sekolah</label>
            <div class="mt-1">
                <input type="text" name="asal_sekolah" id="asal_sekolah" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Masukkan asal sekolah" value="{{ old('asal_sekolah') }}">
            </div>
            @if($errors->has('asal_sekolah'))
                <div class="text-xs mt-1 text-red-500">{{ $errors->first('asal_sekolah') }}</div>
            @endif
        </div>
        {{-- nomor sttb --}}
        <div class="mb-3">
            <label for="no_sttb" class="block text-sm font-medium text-gray-700">Nomor STTB (pada izajah)</label>
            <div class="mt-1">
                <input type="text" name="no_sttb" id="no_sttb" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Masukkan nomor sttb" value="{{ old('no_sttb') }}">
            </div>
            @if($errors->has('no_sttb'))
                <div class="text-xs mt-1 text-red-500">{{ $errors->first('no_sttb') }}</div>
            @endif
        </div>
        {{-- tahun sttb --}}
        <div class="mb-3">
            <label for="tahun_sttb" class="block text-sm font-medium text-gray-700">Tahun STTB (pada izajah)</label>
            <div class="mt-1">
                <input type="number" name="tahun_sttb" id="tahun_sttb" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Masukkan tahun sttb" value="{{ old('tahun_sttb') }}">
            </div>
            @if($errors->has('tahun_sttb'))
                <div class="text-xs mt-1 text-red-500">{{ $errors->first('tahun_sttb') }}</div>
            @endif
        </div>
        <h1 class="text-base font-bold text-emerald-800 mb-3">Program Studi</h1>
        <div class="mb-3">
            <label for="jurusan" class="block text-sm font-medium text-gray-700">Utama</label>
            <div class="mt-1">
                <select name="jurusan" id="jurusan" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md">
                    <option value="">Pilih Program Studi</option>
                    @foreach($jurusan as $j)
                    <option value="{{ $j->id }}" @if(old('jurusan') == $j->id) selected @endif>{{ $j->nama }}</option>
                    @endforeach
                </select>
            </div>
            @if($errors->has('jurusan'))
                <div class="text-xs mt-1 text-red-500">{{ $errors->first('jurusan') }}</div>
            @endif
        </div>
        <div class="mb-3">
            <label for="jurusan2" class="block text-sm font-medium text-gray-700">Pilihan Kedua</label>
            <div class="mt-1">
                <select name="jurusan2" id="jurusan2" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md">
                    <option value="">Pilih Program Studi</option>
                    @foreach($jurusan as $j)
                    <option value="{{ $j->id }}" @if(old('jurusan2') == $j->id) selected @endif>{{ $j->nama }}</option>
                    @endforeach
                </select>
            </div>
            @if($errors->has('jurusan2'))
                <div class="text-xs mt-1 text-red-500">{{ $errors->first('jurusan2') }}</div>
            @endif
        </div>
    </div>
    <div class="mb-3 px-8 formPage4 hidden">
        <h1 class="text-base font-bold text-emerald-800 mb-3">Lain Lain</h1>
        <div class="mb-3">
            <label for="tinggi_badan" class="block text-sm font-medium text-gray-700">Tinggi Badan</label>
            <div class="mt-1">
                <input type="number" name="tinggi_badan" id="tinggi_badan" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Masukkan Tinggi Badan" value="{{ old('tinggi_badan') }}">
            </div>
            @if($errors->has('tinggi_badan'))
                <div class="text-xs mt-1 text-red-500">{{ $errors->first('tinggi_badan') }}</div>
            @endif
        </div>
        {{-- berat badan --}}
        <div class="mb-3">
            <label for="berat_badan" class="block text-sm font-medium text-gray-700">Berat Badan</label>
            <div class="mt-1">
                <input type="number" name="berat_badan" id="berat_badan" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Masukkan Berat Badan" value="{{ old('berat_badan') }}">
            </div>
            @if($errors->has('berat_badan'))
                <div class="text-xs mt-1 text-red-500">{{ $errors->first('berat_badan') }}</div>
            @endif
        </div>
        {{-- golongan darah --}}
        <div class="mb-3">
            <label for="golongan_darah" class="block text-sm font-medium text-gray-700">Golongan Darah</label>
            <div class="mt-1 grid grid-cols-3 gap-1">
                <select name="golongan_darah" id="golongan_darah" class="col-span-2 text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md">
                    <option value="">Pilih Golongan Darah</option>
                    <option value="a" @if(old('golongan_darah') == 'a') selected @endif>A</option>
                    <option value="b" @if(old('golongan_darah') == 'b') selected @endif>B</option>
                    <option value="ab" @if(old('golongan_darah') == 'ab') selected @endif>AB</option>
                    <option value="o" @if(old('golongan_darah') == 'o') selected @endif>O</option>
                </select>
                {{-- min/plus --}}
                <select name="rhesus" id="rhesus" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md">
                    <option value="">Pilih Rhesus</option>
                    <option value="+" @if(old('rhesus') == '+') selected @endif>+</option>
                    <option value="-" @if(old('rhesus') == '-') selected @endif>-</option>
                </select>
            </div>
            @if($errors->has('golongan_darah'))
                <div class="text-xs mt-1 text-red-500">{{ $errors->first('golongan_darah') }}</div>
            @endif
        </div>
        {{-- penyakit kronis --}}
        <div class="mb-3">
            <label for="penyakit_kronis" class="block text-sm font-medium text-gray-700">Penyakit Kronis</label>
            <div class="mt-1">
                <input type="text" name="penyakit_kronis" id="penyakit_kronis" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Masukkan Penyakit Kronis" value="{{ old('penyakit_kronis') }}">
            </div>
            @if($errors->has('penyakit_kronis'))
                <div class="text-xs mt-1 text-red-500">{{ $errors->first('penyakit_kronis') }}</div>
            @endif
        </div>
        {{-- cita cita --}}
        <div class="mb-3">
            <label for="cita_cita" class="block text-sm font-medium text-gray-700">Cita Cita</label>
            <div class="mt-1">
                <input type="text" name="cita_cita" id="cita_cita" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Masukkan Cita Cita" value="{{ old('cita_cita') }}">
            </div>
            @if($errors->has('cita_cita'))
                <div class="text-xs mt-1 text-red-500">{{ $errors->first('cita_cita') }}</div>
            @endif
        </div>
        {{-- hobi --}}
        <div class="mb-3">
            <label for="hobi" class="block text-sm font-medium text-gray-700">Hobi</label>
            <div class="mt-1">
                <input type="text" name="hobi" id="hobi" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Masukkan Hobi" value="{{ old('hobi') }}">
            </div>
            @if($errors->has('hobi'))
                <div class="text-xs mt-1 text-red-500">{{ $errors->first('hobi') }}</div>
            @endif
        </div>
        {{-- prestasi yang pernah di capai--}}
        <div class="mb-3">
            <label for="prestasi" class="block text-sm font-medium text-gray-700">Prestasi yang pernah di capai</label>
            <div class="mt-1">
                <input type="text" name="prestasi" id="prestasi" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Masukkan Prestasi" value="{{ old('prestasi') }}">
            </div>
            @if($errors->has('prestasi'))
                <div class="text-xs mt-1 text-red-500">{{ $errors->first('prestasi') }}</div>
            @endif
        </div>
        {{-- keahlian --}}
        <div class="mb-3">
            <label for="keahlian" class="block text-sm font-medium text-gray-700">Keahlian</label>
            <div class="mt-1">
                <input type="text" name="keahlian" id="keahlian" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Masukkan Keahlian" value="{{ old('keahlian') }}">
            </div>
            @if($errors->has('keahlian'))
                <div class="text-xs mt-1 text-red-500">{{ $errors->first('keahlian') }}</div>
            @endif
        </div>
        {{-- ukuran seragam --}}
        <div class="mb-3">
            <label for="ukuran_seragam" class="block text-sm font-medium text-gray-700">Ukuran Seragam</label>
            <select name="ukuran_seragam" id="ukuran_seragam" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md">
                <option value="">Pilih Ukuran Seragam</option>
                <option value="s" @if(old('ukuran_seragam') == 's') selected @endif>S</option>
                <option value="m" @if(old('ukuran_seragam') == 'm') selected @endif>M</option>
                <option value="l" @if(old('ukuran_seragam') == 'l') selected @endif>L</option>
                <option value="xl" @if(old('ukuran_seragam') == 'xl') selected @endif>XL</option>
                <option value="xxl" @if(old('ukuran_seragam') == 'xxl') selected @endif>XXL</option>
            </select>
            @if($errors->has('ukuran_seragam'))
                <div class="text-xs mt-1 text-red-500">{{ $errors->first('ukuran_seragam') }}</div>
            @endif
        </div>
        {{-- referensi --}}
        <div class="mb-3">
            <label for="referensi" class="block text-sm font-medium text-gray-700">Referensi</label>
            <div class="mt-1">
                <input type="text" name="referensi" id="referensi" class="text-xs shadow-sm focus:ring-emerald-800 focus:border-emerald-800 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Masukkan Referensi" value="{{ old('referensi') }}">
            </div>
            @if($errors->has('referensi'))
                <div class="text-xs mt-1 text-red-500">{{ $errors->first('referensi') }}</div>
            @endif
        </div>
    </div>
    </form>
    <div class="px-8 mb-5 mt-10">
        <div class="formPage1 flex justify-end">
            <button type="button" class="bg-lime-700 text-white rounded-lg px-4 py-2 text-sm font-medium" id="nextPage2">Selanjutnya</button>
        </div>
        <div class="formPage2 flex justify-between hidden">
            <button type="button" class="bg-lime-700 text-white rounded-lg px-4 py-2 text-sm font-medium" id="backPage1">Kembali</button>
            <button id="nextPage3" class="bg-lime-700 text-white rounded-lg px-4 py-2 text-sm font-medium">Selanjutnya</button>
        </div>
        <div class="formPage3 flex justify-between hidden">
            <button type="button" class="bg-lime-700 text-white rounded-lg px-4 py-2 text-sm font-medium" id="backPage2">Kembali</button>
            <button id="nextPage4" class="bg-lime-700 text-white rounded-lg px-4 py-2 text-sm font-medium">Selanjutnya</button>
        </div>
        <div class="formPage4 flex justify-between hidden">
            <button type="button" class="bg-lime-700 text-white rounded-lg px-4 py-2 text-sm font-medium" id="backPage3">Kembali</button>
            <button id="subButton" class="bg-lime-700 text-white rounded-lg px-4 py-2 text-sm font-medium">Submit</button>
        </div>
    </div>
</div>
{{-- footer --}}
<div class="w-full py-4 px-8">
    <div class="flex items-center justify-center">
        <img src="/image/logo.png" class="h-10" alt="logo">
        <h1 class="text-xs font-bold text-emerald-800 text-center">SMK Terpadu Ad-Dimyati</h1>
    </div>
</div>
@endsection
@section('script')
<script src="/js/nik_parse.min.js"></script>
<script>
    // document ready
    $(document).ready(function() {
        const page = '{{ session('page') ?? 1 }}'
        goToPage(page);
    });
    $('#nik').on('keyup', function() {
        setTimeout(() => {
            let nik = $('#nik').val();
            nikParse(nik, function(result) {
                if (result.status == "error") {
                    $('#nikError').html(result.pesan);
                    $('#nikError').removeClass('text-green-500');
                    $('#nikError').addClass('text-red-500');
                } else {
                    console.log(result);
                    $('#nikError').html(result.pesan);
                    $('#nikError').removeClass('text-red-500');
                    $('#nikError').addClass('text-green-500');
                    $('#nik').addClass('text-green-500');
                    
                    let tgl = result.data.lahir.split('/');
                    let tanggal_lahir = tgl[2] + "-" + tgl[1] + "-" + tgl[0];
                    $('#tanggal_lahir').val(tanggal_lahir);
                    let jk = result.data.kelamin == "LAKI-LAKI" ? "l" : "p";
                    $('#jenis_kelamin').val(jk);
                    $('#kecamatan').val(result.data.kecamatan);
                    $('#kota').val(result.data.kotakab);
                    $('#provinsi').val(result.data.provinsi);
                    $('#kode_pos').val(result.data.tambahan.kodepos);
                    
                }
            });
        }, 2000);
    });
    
    $('#nextPage2').on('click', function() {
        nextPage(1);
    });
    $('#nextPage3').on('click', function() {
        nextPage(2);
    });
    $('#nextPage4').on('click', function() {
        nextPage(3);
    });
    $('#backPage1').on('click', function() {
        backPage(2);
    });
    $('#backPage2').on('click', function() {
        backPage(3);
    });
    $('#backPage3').on('click', function() {
        backPage(4);
    });

    $('#subButton').on('click', function() {
        // form submit
        $('#formPendaftaran').submit();
    });

    function nextPage(page) {
        $('.formPage' + page).addClass('hidden');
        $('.formPage' + (page + 1)).removeClass('hidden');
    }

    function backPage(page) {
        $('.formPage' + page).addClass('hidden');
        $('.formPage' + (page - 1)).removeClass('hidden');
    }

    function goToPage(page) {
        $('.page0').addClass('hidden');
        $('.formPage1').addClass('hidden');
        $('.formPage2').addClass('hidden');
        $('.formPage3').addClass('hidden');
        $('.formPage4').addClass('hidden');

        // show page
        $('.formPage' + page).removeClass('hidden');
    }

    $('#walicekbox').on('click', function() {
        if ($(this).is(':checked')) {
            $('.walifield').removeClass('hidden');
        } else {
            $('.walifield').addClass('hidden');
        }
    });
    
</script>
@endsection