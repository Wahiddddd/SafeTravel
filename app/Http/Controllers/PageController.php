<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function beranda()
    {
        return  view("pages.beranda");
    }
    public function infoNegara()
    {
        return  view("pages.info-negara.info-negara");
    }
    public function informasiUmum()
    {
        return  view("pages.info-negara.informasi-umum");
    }
    public function persyaratan()
    {
        return  view("pages.info-negara.persyaratan");
    }
    public function keselamatanKeamanan()
    {
        return  view("pages.info-negara.keselamatan&keamanan");
    }
    public function hukumKebiasaan()
    {
        return  view("pages.info-negara.hukum&kebiasaan");
    }
    public function mataUang()
    {
        return  view("pages.info-negara.mata-uang");
    }
    public function asuransiKesehatan()
    {
        return  view("pages.info-negara.asuransi-kesehatan");
    }
    public function telekomunikasi()
    {
        return  view("pages.info-negara.telekomunikasi");
    }
    public function tempatIbadah()
    {
        return  view("pages.info-negara.tempat-ibadah");
    }
    public function fasilitasKesehatan()
    {
        return  view("pages.info-negara.fasilitas-kesehatan");
    }
    public function kuliner()
    {
        return  view("pages.info-negara.kuliner");
    }
    public function tempatWisata()
    {
        return  view("pages.info-negara.tempat-wisata");
    }
    public function fasilitasKesehatanDetail()
    {
        return  view("pages.info-negara.kesehatan-detail");
    }
    public function tempatIbadahDetail()
    {
        return  view("pages.info-negara.tempat-ibadah-detail");
    }
    public function kulinerDetail()
    {
        return  view("pages.info-negara.kuliner-detail");
    }
    public function tempatWisataDetail()
    {
        return  view("pages.info-negara.tempat-wisata-detail");
    }
    public function himbauan()
    {
        return  view("pages.himbauan.himbauan");
    }
    public function himbauanDetail()
    {
        return  view("pages.himbauan.himbauan-detail");
    }
    public function pelayananDinas()
    {
        return  view("pages.pelayanan.dinas");
    }
    public function pelayananUmum()
    {
        return  view("pages.pelayanan.umum");
    }
    public function pelayananUmumInggrisRaya()
    {
        return  view("pages.pelayanan.list-kbri");
    }
    public function kbri()
    {
        return  view("pages.pelayanan.detail-kbri");
    }
    public function pembuatanPaspor()
    {
        return  view("pages.pelayanan.pembuatan-paspor");
    }
    public function pembuatanSPLP()
    {
        return  view("pages.pelayanan.pembuatan-SPLP");
    }
    public function legalisasiDokumen()
    {
        return  view("pages.pelayanan.legalisasi-dokumen");
    }
    public function pelayananLain()
    {
        return  view("pages.pelayanan.pelayanan-lain");
    }
    public function laporDiri()
    {
        return  view("pages.pelayanan.lapor-diri");
    }
    public function touristVisa()
    {
        return  view("pages.pelayanan.tourist-social-visa");
    }
    public function diplomaticServiceVisa()
    {
        return  view("pages.pelayanan.diplomatic-service-visa");
    }
    public function journalisticVisa()
    {
        return  view("pages.pelayanan.journalistic-Visa");
    }
    public function perlindunganHukum()
    {
        return  view("pages.pelayanan.perlindungan-hukum");
    }
    public function asuransiPerjalanan()
    {
        return  view("pages.asuransi.asuransi-perjalanan");
    }
    public function infografis()
    {
        return  view("pages.asuransi.infografis-asuransi-perjalanan");
    }
    public function funFact()
    {
        return  view("pages.fun-fact.index");
    }
    public function funFactDetail()
    {
        return  view("pages.fun-fact.detail");
    }
    public function tipsInfografis()
    {
        return  view("pages.tips.infografis-tips");
    }
    public function tipsTKI()
    {
        return  view("pages.tips.tki");
    }
    public function tipsUmrah()
    {
        return  view("pages.tips.umrah");
    }
    public function tipsWisatawan()
    {
        return  view("pages.tips.wisatawan");
    }
    public function asuransiKartuKredit()
    {
        return  view("pages.asuransi.asuransi-kartu-kredit");
    }



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        //
    }
}
