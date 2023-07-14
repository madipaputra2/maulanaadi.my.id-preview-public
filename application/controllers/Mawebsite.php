<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Controller MaulanaAdi Website
class Mawebsite extends CI_Controller {


    //Kumpulan parameter data yang dimanfaatkan sebagai data koleksi yang digunakan pada Template Parser Libraries (Fitur CI3)
    private $website_details = [
        'title'            => 'MaulanaAdiPratama Website',
        'heading'          => 'Halaman Utama',
        'analytics_code'   => '
                                <script>
                                    var _paq = window._paq = window._paq || [];
                                    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
                                    _paq.push(["trackPageView"]);
                                    _paq.push(["enableLinkTracking"]);
                                    (function() {
                                        var u="//maulanaadi.my.id/analytics/";
                                        _paq.push(["setTrackerUrl", u+"matomo.php"]);
                                        _paq.push(["setSiteId", 1]);
                                        var d=document, g=d.createElement("script"), s=d.getElementsByTagName("script")[0];
                                        g.async=true; g.src=u+"matomo.js"; s.parentNode.insertBefore(g,s);
                                    })();
                                </script>',
        'halaman_bagian'    => '',

    ];
    
    //Menampilkan Halaman Default Index Page
    public function index_page()
    {
        $data = $this->website_details;
        $data['heading'] = 'Halaman Depan';
        $data['halaman_bagian'] = 'halaman/bagian_terdepan/paling_awal';

        $this->parser->parse('web_bagian/bagian_head', $data);
        $this->load->view('web_bagian/bagian_footer');
        
    }

    //Menampilkan Halaman AboutMe
    public function aboutme_page()
    {
        $data = $this->website_details;
        $data['heading'] = 'Detail Info Pemilik Website';
        $data['halaman_bagian'] = 'Halaman Tentang Saya';

        $this->parser->parse('web_bagian/bagian_head', $data);
        $this->load->view('web_bagian/bagian_footer');
    }

    //Menampilkan Halaman Blog Homepage (Preview Layout)
    public function homepage_preview()
    {
        $data = $this->website_details;
        $data['heading'] = 'Preview Layout Blog Homepage';
        $data['halaman_bagian'] = 'halaman/bagian_terdepan/preview_layout/blog_homepage';

        $this->parser->parse('web_bagian/bagian_head', $data);
        $this->load->view('web_bagian/bagian_footer');
    }

    //Menampilkan Halaman 404 Error .
    public function error_page()
    {
        $data = $this->website_details;
        $data['heading'] = '404 (Halaman Tidak Ditemukan)';
        $data['halaman_bagian'] = 'halaman/halaman_error';

        $this->parser->parse('web_bagian/bagian_head', $data);
        $this->load->view('web_bagian/bagian_footer');
    }

    //Menampilkan Halaman Kosong .
    public function blank_page()
    {
        $data = $this->website_details;
        $data['heading'] = 'Halaman Kosong';
        $data['halaman_bagian'] = 'halaman/halaman_kosong';

        $this->parser->parse('web_bagian/bagian_head', $data);
        $this->load->view('web_bagian/bagian_footer');
    }
}
