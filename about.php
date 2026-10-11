<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <title>About Us | The Farmhill - PT Kebun Bumi Lestari</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="<?php echo base_url();?>base/img/favicon.png" rel="icon">
    <link href="<?php echo base_url();?>base/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts: Plus Jakarta Sans & Montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Libraries CSS & Ionicons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet" type='text/css'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>base/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>base/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>base/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>base/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        farmhill: {
                            olive: '#3E5702',
                            'olive-dark': '#213202',
                            kraft: '#8D7560',
                            gourd: '#FC6720',
                            cream: '#F4F6F0',
                            charcoal: '#2B3624'
                        }
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                        display: ['Montserrat', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        /* Penyesuaian agar tidak bentrok dengan Bootstrap lama */
        .tailwind-scope img { max-width: none; }
    </style>
</head>

<body class="bg-white text-farmhill-charcoal font-sans antialiased selection:bg-farmhill-olive selection:text-white">

    <!-- Header PHP CodeIgniter -->
    <?php $this->load->view("header")?>

    <div class="tailwind-scope">
        <!-- HERO SECTION / TITLE -->
        <section class="bg-farmhill-cream py-16 lg:py-24 border-b border-gray-100">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center max-w-4xl">
                <span class="inline-block bg-white text-farmhill-olive px-4 py-1.5 rounded-full text-xs font-bold border border-farmhill-olive/20 shadow-sm uppercase tracking-wider mb-4">
                    Tentang Kami
                </span>
                <h1 class="text-3xl sm:text-5xl font-extrabold font-display text-farmhill-olive-dark tracking-tight">
                    Top of Mind Modern Farming
                </h1>
                <p class="text-gray-600 text-sm sm:text-base mt-4 leading-relaxed max-w-2xl mx-auto">
                    The Farmhill merupakan merk dagang di bawah PT Kebun Bumi Lestari yang bergerak di bidang pertanian hidroponik berteknologi tinggi.
                </p>
            </div>
        </section>

        <!-- ABOUT CONTENT & CAROUSEL SECTION -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-5xl">
                
                <!-- Deskripsi Perusahaan -->
                <div class="bg-farmhill-cream rounded-3xl p-8 lg:p-12 shadow-sm border border-gray-100 mb-16">
                    <p class="text-gray-700 text-base sm:text-lg leading-relaxed text-center sm:text-left">
                        &emsp;&emsp;&emsp;The Farmhill merupakan merk dagang di bawah PT Kebun Bumi Lestari yang bergerak dibidang pertanian hidroponik. Dengan menyematkan teknologi pada proses bertani, membuat kami mampu menghasilkan produk-produk hidroponik yang memiliki kualitas tampilan, rasa, dan gizi yang tinggi. Selain itu, proses kultivasi dengan pengelolaan yang efektif membuat kami dapat menyediakan produk hidroponik secara konsisten dengan kuantitas yang optimal.
                    </p>
                </div>

                <!-- Gallery / Visual Showcase (Pengganti carousel kaku lama) -->
                <div class="space-y-8">
                    <h3 class="text-2xl font-bold font-display text-farmhill-olive-dark text-center">Galeri Greenhouse & Aktivitas Kami</h3>
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="rounded-3xl overflow-hidden shadow-md border border-gray-100 group">
                            <img src="<?php echo base_url();?>base/img/aboutus/Greenhouse Field Team Portrait.png" alt="Greenhouse Team" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300" onerror="this.src='https://images.unsplash.com/photo-1530836369250-ef72a3f5cda8?w=600&auto=format&fit=crop&q=80';">
                        </div>
                        <div class="rounded-3xl overflow-hidden shadow-md border border-gray-100 group">
                            <img src="<?php echo base_url();?>base/img/aboutus/2.png" alt="Hydroponic Farm" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300" onerror="this.src='https://images.unsplash.com/photo-1585320806297-9794b3e4eeae?w=600&auto=format&fit=crop&q=80';">
                        </div>
                        <div class="rounded-3xl overflow-hidden shadow-md border border-gray-100 group">
                            <img src="<?php echo base_url();?>base/img/aboutus/3.png" alt="Fresh Harvest" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300" onerror="this.src='https://images.unsplash.com/photo-1563514227147-6d2ff665a6a0?w=600&auto=format&fit=crop&q=80';">
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- VISI & MISI SECTION -->
        <section class="py-20 bg-farmhill-cream border-t border-gray-100">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-4xl">
                <div class="grid md:grid-cols-2 gap-10">
                    
                    <!-- Visi -->
                    <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 space-y-4">
                        <div class="w-12 h-12 bg-farmhill-olive/10 text-farmhill-olive rounded-2xl flex items-center justify-center font-bold text-xl">
                            🎯
                        </div>
                        <h3 class="text-2xl font-bold font-display text-farmhill-olive-dark">Visi Kami</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Menjadi penyedia produk & jasa hidroponik terbaik untuk Indonesia.
                        </p>
                    </div>

                    <!-- Misi -->
                    <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 space-y-4">
                        <div class="w-12 h-12 bg-farmhill-gourd/10 text-farmhill-gourd rounded-2xl flex items-center justify-center font-bold text-xl">
                            🚀
                        </div>
                        <h3 class="text-2xl font-bold font-display text-farmhill-olive-dark">Misi Kami</h3>
                        <div class="space-y-2 text-gray-600 text-sm leading-relaxed">
                            <p>1. Mengembangkan pertanian dengan teknologi modern</p>
                            <p>2. Menghasilkan dan memasarkan produk berkualitas secara berkelanjutan</p>
                            <p>3. Memberdayakan sumber daya milenial sebagai tonggak masa depan bangsa.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

    <!-- Footer PHP CodeIgniter -->
    <?php $this->load->view("footer")?>

    <!-- JavaScript Libraries -->
    <script src="<?php echo base_url();?>base/lib/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>base/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url();?>base/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>base/lib/lightbox/js/lightbox.min.js"></script>
</body>
</html>
