<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\User;


class PagesController extends Controller
{
    public function login(){
        if(Auth::check()){
            return redirect()->route('home');
        }
        else{
            return view('auth.login');
        }

    }

    public function reg(){
        return view('pages.reg');
    }

    public function home(){
        return view('pages.home');
    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function review(){

        if(Auth::check()){
            $id=Auth::id();
            $rev=Review::all();
            $curuser=User::find($id);
            return view('pages.review')->with('rev', $rev)->with('curuser', $curuser);
        }
        else{
            return view('auth.login');
        }
    }

    public function post_review(Request $request){
        $msg=$request->input('foo');
        $un=Auth::user()->name;
        $reviewtable= new Review();
        $reviewtable->username=$un;
        $reviewtable->comment=$msg;
        $reviewtable->save();

        return redirect()->back()->with('alert', 'Successfully Submitted');
    }

    public function packages(){
        if(Auth::check()){
            return view('pages.packages');
        }
        else{
            return view('auth.login');
        }
    }

    public function confirm(Request $request){
        $place=$request->input('reg');
        $pkg=$request->input('fav_language');

        return view('pages.confirm')->with('place', $place)->with('pkg', $pkg);
    }

    

    public function ilocos(){
        return view('pages.ilocos');
    }
    public function apayao(){
        return view('pages.apayao');
    }

    public function baguio(){
        return view('pages.baguio');
    }

    public function bataan(){
        return view('pages.bataan');
    }

    public function batangas(){
        return view('pages.batangas');
    }

    public function benguet(){
        return view('pages.beng');
    }

    public function bicol(){
        return view('pages.bico');
    }

    public function bulacan(){
        return view('pages.bulacan');
    }

    public function cagayan_prov(){
        return view('pages.cagayan-prov');
    }

    public function cagayan(){
        return view('pages.cagayan');
    }

    public function calabarzon(){
        return view('pages.calabarzon');
    }

    public function cordillera(){
        return view('pages.car');
    }

    public function catanduanes(){
        return view('pages.cata');
    }

    public function central_luzon(){
        return view('pages.central');
    }

    public function nueva_ecija(){
        return view('pages.ecija');
    }

    public function ifugao(){
        return view('pages.ifugao');
    }

    public function ilocos_sur(){
        return view('pages.ilocos-sur');
    }

    public function isabela(){
        return view('pages.isabela');
    }

    public function kalinga(){
        return view('pages.kalinga');
    }

    public function la_union(){
        return view('pages.la-union');
    }

    public function laguna(){
        return view('pages.laguna');
    }

    public function las_pinas(){
        return view('pages.las');
    }

    public function makati(){
        return view('pages.makati');
    }

    public function malabon(){
        return view('pages.malabon');
    }

    public function mandaluyong(){
        return view('pages.manda');
    }

    public function manila(){
        return view('pages.manila');
    }

    public function marikina(){
        return view('pages.marikina');
    }

    public function masbate(){
        return view('pages.masbate');
    }

    public function mimaropa(){
        return view('pages.mima');
    }

    public function muntinlupa(){
        return view('pages.munti');
    }

    public function national_capital_region(){
        return view('pages.ncr');
    }

    public function camarines_norte(){
        return view('pages.norte');
    }

    public function nueva_vizcaya(){
        return view('pages.nueva');
    }

    public function occidental_mindoro(){
        return view('pages.occ');
    }

    public function oriental_mindoro(){
        return view('pages.ori');
    }

    public function palawan(){
        return view('pages.pala');
    }

    public function pampanga(){
        return view('pages.pampanga');
    }

    public function pangasinan(){
        return view('pages.pangasinan');
    }

    public function quezon(){
        return view('pages.quezon');
    }

    public function quirino(){
        return view('pages.quirino');
    }

    public function rizal(){
        return view('pages.rizal');
    }

    public function romblon(){
        return view('pages.romb');
    }

    public function sorsogon(){
        return view('pages.sorso');
    }

    public function camarines_sur(){
        return view('pages.sur');
    }

    public function tarlac(){
        return view('pages.tarlac');
    }

    public function zambales(){
        return view('pages.zam');
    }

    public function mt_amuyao(){
        return view('pages.sm-amu');
    }
    public function mount_province(){
        return view('pages.mp');
    }

    public function st_andrew_kim_tae_gon_shrine(){
        return view('pages.sm-an');
    }

    public function anawangin_cove(){
        return view('pages.sm-ana');
    }

    public function angel_cacnio_gallery(){
        return view('pages.sm-ang');
    }

    public function st_anthony_of_padua_cathedral(){
        return view('pages.sm-ant');
    }

    public function anzap_twin_falls(){
        return view('pages.sm-anz');
    }

    public function apao_rolling_hills(){
        return view('pages.sm-apa');
    }

    public function apo_reef_natural_park(){
        return view('pages.sm-apo');
    }

    public function mt_arayat_national_park(){
        return view('pages.sm-ara');
    }

    public function aran_cave(){
        return view('pages.sm-aran');
    }

    public function arigoy_river(){
        return view('pages.sm-ari');
    }

    public function aroroy_lighthouse(){
        return view('pages.sm-aro');
    }

    public function the_ayala_museum(){
        return view('pages.sm-aya');
    }

    public function bacuit_bay_islands(){
        return view('pages.sm-bac');
    }

    public function bagasbas_beach(){
        return view('pages.sm-bag');
    }

    public function bahay_ni_rizal(){
        return view('pages.sm-bah');
    }

    public function balesin_island(){
        return view('pages.sm-bal');
    }

    public function balacay_point(){
        return view('pages.sm-bala');
    }

    public function bamboo_organ_museum(){
        return view('pages.sm-bam');
    }

    public function bantay_church_bell_tower(){
        return view('pages.sm-ban');
    }

    public function mt_banahaw(){
        return view('pages.sm-bana');
    }

    public function bangui_windmills(){
        return view('pages.sm-bangui');
    }

    public function barcelona_church(){
        return view('pages.sm-bar');
    }

    public function san_bartolome_church(){
        return view('pages.sm-bart');
    }

    public function basco_lighthouse(){
        return view('pages.sm-bas');
    }

    public function bat_ongan_cave(){
        return view('pages.sm-bat');
    }

    public function batad_amphitheater_terraces(){
        return view('pages.sm-bata');
    }

    public function binucot_beach(){
        return view('pages.sm-bin');
    }

    public function binalasan_falls(){
        return view('pages.sm-bina');
    }

    public function binurong_point(){
        return view('pages.sm-binu');
    }

    public function blue_lagoon(){
        return view('pages.sm-blu');
    }

    public function boac_cathedral(){
        return view('pages.sm-bo');
    }

    public function bolinao_falls(){
        return view('pages.sm-boli');
    }

    public function bonsai_forest(){
        return view('pages.sm-bon');
    }

    public function bonifacio_circle_monumento(){
        return view('pages.sm-boni');
    }

    public function bontoc_museum(){
        return view('pages.sm-bont');
    }

    public function botolan_resettlement_sites(){
        return view('pages.sm-bot');
    }

    public function botong_twin_falls(){
        return view('pages.sm-boto');
    }

    public function buaya_caves(){
        return view('pages.sm-bua');
    }

    public function bunguit_falls(){
        return view('pages.sm-bug');
    }

    public function bulalacao_island(){
        return view('pages.sm-bul');
    }

    public function bulalakaw_falls(){
        return view('pages.sm-bula');
    }

    public function mt_bulusan(){
        return view('pages.sm-bulu');
    }

    public function buntun_bridge(){
        return view('pages.sm-bun');
    }

    public function burnham_park(){
        return view('pages.sm-bur');
    }

    public function busay_falls(){
        return view('pages.sm-bus');
    }

    public function buntod_bar_and_reef_marine_sanctuary(){
        return view('pages.sm-but');
    }

    public function calvary_hills(){
        return view('pages.sm-cal');
    }

    public function calaguas_islands(){
        return view('pages.sm-cala');
    }

    public function calanasan_philippine_eagle_sanctuary(){
        return view('pages.sm-calan');
    }

    public function caliraya_lake(){
        return view('pages.sm-cali');
    }

    public function calle_crisologo(){
        return view('pages.sm-call');
    }

    public function callao_cave(){
        return view('pages.sm-calla');
    }

    public function camp_john_hay(){
        return view('pages.sm-cam');
    }

    public function candaba_bird_sanctuary(){
        return view('pages.sm-can');
    }

    public function capas_national_shrine(){
        return view('pages.sm-cap');
    }

    public function capones_islands(){
        return view('pages.sm-capo');
    }

    public function carron_dream_park(){
        return view('pages.sm-car');
    }

    public function caramoan_islands(){
        return view('pages.sm-cara');
    }

    public function casapsapan_beach(){
        return view('pages.sm-cas');
    }

    public function the_chinese_cemetary(){
        return view('pages.sm-chi');
    }

    public function clark_museum_and_4d_theater(){
        return view('pages.sm-cla');
    }

    public function calao_falls(){
        return view('pages.sm-co');
    }

    public function corregidor_island(){
        return view('pages.sm-cor');
    }

    public function mt_damas(){
        return view('pages.sm-dam');
    }

    public function dambana_ng_mga_alaala(){
        return view('pages.sm-damb');
    }

    public function daranak_falls(){
        return view('pages.sm-dar');
    }

    public function museo_de_la_salle(){
        return view('pages.sm-dela');
    }

    public function dicotcotan_beach(){
        return view('pages.sm-dic');
    }

    public function dicasalarin_cove(){
        return view('pages.sm-dica');
    }

    public function diguisit_beach_and_rock_formation(){
        return view('pages.sm-dig');
    }

    public function dinosaurs_island_pampanga(){
        return view('pages.sm-dino');
    }

    public function saint_dominic_cathedral(){
        return view('pages.sm-dom');
    }

    public function dulag_historical_marker(){
        return view('pages.sm-dula');
    }

    public function dupag_rock_formation(){
        return view('pages.sm-dup');
    }

    public function enchanted_kingdom(){
        return view('pages.sm-ek');
    }

    public function gen_emilio_aguinaldo_shrine(){
        return view('pages.sm-em');
    }

    public function enchanted_cave(){
        return view('pages.sm-encha');
    }

    public function ermita_hill(){
        return view('pages.sm-er');
    }

    public function farm_villarontes_flower_farm(){
        return view('pages.sm-fa');
    }

    public function fantasy_world(){
        return view('pages.sm-fan');
    }

    public function footprints_beach(){
        return view('pages.sm-foo');
    }

    public function forest_garden(){
        return view('pages.sm-for');
    }

    public function fortune_island(){
        return view('pages.sm-fort');
    }

    public function st_francis_square_mall(){
        return view('pages.sm-fran');
    }

    public function marikina_city_footwear_museum(){
        return view('pages.sm-ftw');
    }

    public function gen_aguinaldo_shrine(){
        return view('pages.sm-gen');
    }

    public function greenfield_weekend_market(){
        return view('pages.sm-gf');
    }

    public function gololan_falls(){
        return view('pages.sm-gol');
    }

    public function governors_rapids(){
        return view('pages.sm-gov');
    }

    public function greenbelt_chapel(){
        return view('pages.sm-gree');
    }

    public function guadalupe_ruins(){
        return view('pages.sm-gua');
    }

    public function guiguinto_old_train_station(){
        return view('pages.sm-gui');
    }

    public function mt_guiting_guiting(){
        return view('pages.sm-guit');
    }

    public function gulon_peak(){
        return view('pages.sm-gul');
    }

    public function mt_halcon(){
        return view('pages.sm-hal');
    }

    public function the_hanging_coffins(){
        return view('pages.sm-han');
    }

    public function honestly_coffee_shop(){
        return view('pages.sm-hon');
    }

    public function hundred_islands(){
        return view('pages.sm-hun');
    }

    public function ibaviosa_house_and_the_patis_factory(){
        return view('pages.sm-iba');
    }

    public function mt_iglit_baco_national_park(){
        return view('pages.sm-ig');
    }

    public function immaculada_concepcion_de_malabon_church(){
        return view('pages.sm-imma');
    }

    public function mt_isarog(){
        return view('pages.sm-isa');
    }

    public function iwahig_firefly(){
        return view('pages.sm-iwa');
    }

    public function saint_joseph_cathedral(){
        return view('pages.sm-jo');
    }

    public function saint_john_the_baptist_church(){
        return view('pages.sm-joh');
    }

    public function saint_joseph_church(){
        return view('pages.sm-jos');
    }

    public function kamay_ni_hesus_shrine(){
        return view('pages.sm-kam');
    }

    public function kanaway_beach(){
        return view('pages.sm-kan');
    }

    public function kaparkan_falls(){
        return view('pages.sm-kap');
    }

    public function kapurpurawan_rock_formation(){
        return view('pages.sm-kapur');
    }

    public function kiagan_shrine(){
        return view('pages.sm-kia');
    }

    public function kili_falls(){
        return view('pages.sm-kil');
    }

    public function lake_buhi(){
        return view('pages.sm-la');
    }

    public function our_lady_of_the_abandoned_parish(){
        return view('pages.sm-lad');
    }

    public function lahuy_island(){
        return view('pages.sm-lah');
    }

    public function laiya_aplaya(){
        return view('pages.sm-lai');
    }

    public function la_loma_cementary(){
        return view('pages.sm-lal');
    }

    public function landingan_viewpoint(){
        return view('pages.sm-lan');
    }

    public function las_casas_filipinas_de_acuzar(){
        return view('pages.sm-las');
    }

    public function leon_gallery(){
        return view('pages.sm-leo');
    }

    public function libtec_crystal_cave(){
        return view('pages.sm-lib');
    }

    public function limutan_falls(){
        return view('pages.sm-lim');
    }

    public function lintungan_falls(){
        return view('pages.sm-lin');
    }

    public function linao_ni_victo(){
        return view('pages.sm-lina');
    }

    public function lobo(){
        return view('pages.sm-lob');
    }

    public function lotus_valley_farm(){
        return view('pages.sm-lot');
    }

    public function lower_magat_eco_tourism_park(){
        return view('pages.sm-low');
    }

    public function lppchea(){
        return view('pages.sm-lpp');
    }

    public function lubo_and_mangali_rice_terraces(){
        return view('pages.sm-lub');
    }

    public function lussok_cave_underground_river(){
        return view('pages.sm-lus');
    }

    public function mactol_falls(){
        return view('pages.sm-mac');
    }

    public function ma_cho_temple(){
        return view('pages.sm-macho');
    }

    public function mt_maculot(){
        return view('pages.sm-macu');
    }

    public function mahabang_buhangin(){
        return view('pages.sm-mah');
    }

    public function mt_makiling(){
        return view('pages.sm-maki');
    }

    public function malatap_falls(){
        return view('pages.sm-mal');
    }

    public function mampurog_river(){
        return view('pages.sm-mam');
    }

    public function maniwaya_island(){
        return view('pages.sm-man');
    }

    public function manila_ocean_park(){
        return view('pages.sm-mani');
    }

    public function manila_zoological_and_botanical_garden(){
        return view('pages.sm-manz');
    }

    public function mapesak_falls(){
        return view('pages.sm-map');
    }

    public function mariveles_view_park(){
        return view('pages.sm-mar');
    }

    public function marcelo_h_del_pilar_museum(){
        return view('pages.sm-marc');
    }

    public function marinduque_wildlife_sanctuary(){
        return view('pages.sm-mari');
    }

    public function masungi_georeserve(){
        return view('pages.sm-mas');
    }

    public function mt_mayon(){
        return view('pages.sm-may');
    }

    public function sm_megamall(){
        return view('pages.sm-mega');
    }

    public function mindoro_beach(){
        return view('pages.sm-min');
    }

    public function minalungao_national_park(){
        return view('pages.sm-mina');
    }

    public function mines_view_park(){
        return view('pages.sm-mine');
    }

    public function mongpong_island(){
        return view('pages.sm-mo');
    }

    public function mt_mog_ao(){
        return view('pages.sm-mog');
    }

    public function monasterio_de_tarlac(){
        return view('pages.sm-mon');
    }

    public function morong_beach(){
        return view('pages.sm-mor');
    }

    public function museo_ilocos_norte(){
        return view('pages.sm-mus');
    }

    public function museo_de_baler(){
        return view('pages.sm-muse');
    }

    public function nayong_pilipino(){
        return view('pages.sm-na');
    }

    public function nagcarlan_underground_cemetary(){
        return view('pages.sm-nag');
    }

    public function nagacadan_rice_terraces(){
        return view('pages.sm-naga');
    }

    public function mt_napulawan(){
        return view('pages.sm-napu');
    }

    public function nature_church(){
        return view('pages.sm-nat');
    }

    public function national_museum_complex(){
        return view('pages.sm-nati');
    }

    public function northen_blossom_flower_farm(){
        return view('pages.sm-nor');
    }

    public function onoda_trail_and_caves(){
        return view('pages.sm-ono');
    }

    public function paguriran_island_and_lagoon(){
        return view('pages.sm-pag');
    }

    public function pandan_island(){
        return view('pages.sm-pan');
    }

    public function paoay_church(){
        return view('pages.sm-paoay');
    }

    public function patag_island(){
        return view('pages.sm-pat');
    }

    public function patapat_viaduct(){
        return view('pages.sm-pata');
    }

    public function penafrancia_basilica_minore(){
        return view('pages.sm-pena');
    }

    public function st_peters_cathedral(){
        return view('pages.sm-pet');
    }

    public function philippine_science_complex(){
        return view('pages.sm-phil');
    }

    public function mt_pinatubo(){
        return view('pages.sm-pi');
    }

    public function pililla_wind_farm(){
        return view('pages.sm-pil');
    }

    public function pinacanauan_river(){
        return view('pages.sm-pina');
    }

    public function pinamuntugan_island(){
        return view('pages.sm-pinam');
    }

    public function plaza_salcedo(){
        return view('pages.sm-pla');
    }

    public function poctoy_white_beach(){
        return view('pages.sm-poc');
    }

    public function puerto_princesa_subterranean(){
        return view('pages.sm-pue');
    }

    public function mt_purro_nature_reserve(){
        return view('pages.sm-pur');
    }

    public function puraran_beach(){
        return view('pages.sm-pura');
    }

    public function quirino_watersports_complex(){
        return view('pages.sm-qui');
    }
    
    public function quitinday_green_hills_formation(){
        return view('pages.sm-quit');
    }

    public function rancho_de_cabileo(){
        return view('pages.sm-ra');
    }

    public function ragara_beach(){
        return view('pages.sm-rag');
    }

    public function marikina_river_park(){
        return view('pages.sm-riv');
    }

    public function rizal_park(){
        return view('pages.sm-riz');
    }

    public function san_roque_cathedral(){
        return view('pages.sm-roq');
    }

    public function salibungot_beach(){
        return view('pages.sm-sal');
    }

    public function mt_samat_national_shrine(){
        return view('pages.sm-sam');
    }

    public function samal_church(){
        return view('pages.sm-sama');
    }

    public function san_matias_parish_church(){
        return view('pages.sm-san');
    }

    public function santuario_de_san_ezekiel_moreno(){
        return view('pages.sm-sant');
    }

    public function fort_santiago(){
        return view('pages.sm-santia');
    }

    public function sapilang_falls(){
        return view('pages.sm-sap');
    }

    public function shangri_la_plaza_mall(){
        return view('pages.sm-sha');
    }

    public function sombrero_island(){
        return view('pages.sm-som');
    }

    public function the_spirit_of_bethlehem_museum(){
        return view('pages.sm-spi');
    }

    public function strawberry_farm(){
        return view('pages.sm-stra');
    }

    public function sumlang_lake(){
        return view('pages.sm-sum');
    }

    public function susong_dalaga(){
        return view('pages.sm-sus');
    }

    public function sy_juco_house(){
        return view('pages.sm-sy');
    }

    public function taal_volcano(){
        return view('pages.sm-ta');
    }

    public function tagaytay_ridge(){
        return view('pages.sm-tag');
    }

    public function talisayen_cove(){
        return view('pages.sm-tali');
    }

    public function tambac_beach(){
        return view('pages.sm-tam');
    }

    public function tamawan_village(){
        return view('pages.sm-tama');
    }

    public function tangadan_falls(){
        return view('pages.sm-tan');
    }

    public function taoist_temple(){
        return view('pages.sm-tao');
    }

    public function tapuakan_river(){
        return view('pages.sm-tap');
    }

    public function tappiyah_falls(){
        return view('pages.sm-tapp');
    }

    public function tayid_lighthouse(){
        return view('pages.sm-tay');
    }

    public function tekip_falls(){
        return view('pages.sm-tek');
    }

    public function the_hellship_memorials(){
        return view('pages.sm-th');
    }

    public function mt_timbak(){
        return view('pages.sm-tim');
    }

    public function tinipak_river(){
        return view('pages.sm-tin');
    }

    public function tambobong_beach(){
        return view('pages.sm-tom');
    }

    public function tondal_beach(){
        return view('pages.sm-ton');
    }

    public function the_ayala_triangle_gardens(){
        return view('pages.sm-tri');
    }

    public function tukuran_falls(){
        return view('pages.sm-tu');
    }

    public function tubbataha_reefs_natural_park(){
        return view('pages.sm-tub');
    }

    public function tumuyoc_falls(){
        return view('pages.sm-tum');
    }

    public function ugong_rock(){
        return view('pages.sm-ug');
    }

    public function mt_ugu(){
        return view('pages.sm-ugu');
    }

    public function mt_ulap(){
        return view('pages.sm-ula');
    }

    public function vayang_rolling_hills(){
        return view('pages.sm-vay');
    }

    public function verdivia_falls(){
        return view('pages.sm-ver');
    }

    public function vigan_cathedral(){
        return view('pages.sm-vig');
    }

    public function white_island(){
        return view('pages.sm-wh');
    }

    public function alabang_town_center(){
        return view('pages.sm-ala');
    }

    public function jamboree_lake(){
        return view('pages.sm-jam');
    }

    public function japanese_memorial_cemetery(){
        return view('pages.sm-jap');
    }

    public function sunken_garden(){
        return view('pages.sm-sun');
    }

    public function museo_ng_muntinlupa(){
        return view('pages.sm-munti');
    }

    public function navotas(){
        return view('pages.navotas');
    }

    public function navotas_fish_port(){
        return view('pages.sm-fish');
    }

    public function san_jose_de_navotas_parish_church(){
        return view('pages.sm-sanj');
    }

    public function century_house(){
        return view('pages.sm-cent');
    }

    public function navotas_city_hall(){
        return view('pages.sm-city');
    }

    public function navotas_river(){
        return view('pages.sm-navr');
    }

    public function paranaque(){
        return view('pages.paranaque');
    }

    public function solaire_resort_and_casino(){
        return view('pages.sm-sol');
    }

    public function redemptorist_church(){
        return view('pages.sm-red');
    }

    public function city_of_dreams_manila(){
        return view('pages.sm-dream');
    }

    public function the_ayala_malls_manila_bay(){
        return view('pages.sm-bay');
    }

    public function okada_manila_resort_and_casino(){
        return view('pages.sm-oka');
    }

    public function pasay(){
        return view('pages.pasay');
    }

    public function upside_down_museum(){
        return view('pages.sm-up');
    }

    public function philippine_air_force_aerospace_museum(){
        return view('pages.sm-air');
    }

    public function sm_mall_of_asia(){
        return view('pages.sm-asia');
    }

    public function the_dessert_museum(){
        return view('pages.sm-des');
    }

    public function newport_mall(){
        return view('pages.sm-new');
    }

    public function pasig(){
        return view('pages.pasig');
    }

    public function ace_water_spapasig(){
        return view('pages.sm-ace');
    }

    public function climb_central_manila(){
        return view('pages.sm-climb');
    }

    public function rainforest_adventure_experience(){
        return view('pages.sm-rain');
    }

    public function the_bike_playground(){
        return view('pages.sm-bike');
    }

    public function beer_house_kapitolyo(){
        return view('pages.sm-beer');
    }

    public function pateros(){
        return view('pages.pateros');
    }

    public function dulong_bayan_monument(){
        return view('pages.sm-dulo');
    }

    public function san_roque_church(){
        return view('pages.sm-sanr');
    }

    public function garden_of_memories(){
        return view('pages.sm-sanr');
    }

    public function qc(){
        return view('pages.qc');
    }

    public function museo_ni_manuel_quezon(){
        return view('pages.sm-mq');
    }

    public function la_mesa_ecopark(){
        return view('pages.sm-mesa');
    }

    public function santo_domingo_church(){
        return view('pages.sm-sand');
    }




    
}
