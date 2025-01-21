<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    @livewireStyles
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Informasi lengkap tentang BPKP (Bukti Pemilik Kendaraan Bermotor) untuk motor dan mobil. Panduan resmi pengurusan BPKP kendaraan anda.">
    <meta name="keywords" content="BPKP, Bukti Pemilik Kendaraan Bermotor, BPKP Motor, BPKP Mobil, Dokumen Kendaraan">
    <title>BPKP - Bukti Pemilik Kendaraan Bermotor | Informasi Resmi</title>
    
</head>
<body class="font-sans text-gray-900">
    <header class="bg-blue-900 text-white text-center py-8">
        <h1 class="text-3xl font-semibold">BPKP - Bukti Pemilik Kendaraan Bermotor</h1>
        <p class="text-lg">Dokumen Resmi Kepemilikan Kendaraan Anda</p>
    </header>

    <nav class="bg-blue-800 py-4 text-center">
        <a href="#tentang" class="text-white text-lg mx-12 hover:underline">Tentang BPKP</a>
        <a href="#motor" class="text-white text-lg mx-12 hover:underline">BPKP Motor</a>
        <a href="#mobil" class="text-white text-lg mx-12 hover:underline">BPKP Mobil</a>
        <a href="#formulir" class="text-white text-lg mx-12 hover:underline">Formulir</a>
    </nav>

    <div class="container mx-auto px-6 py-8">
        <section id="tentang" class="mb-12">
            <h2 class="text-2xl font-semibold mb-4">Apa itu BPKP?</h2>
            <p class="text-lg">BPKP (Bukti Pemilik Kendaraan Bermotor) adalah dokumen resmi yang membuktikan kepemilikan sah atas kendaraan bermotor, baik motor maupun mobil. Dokumen ini dikeluarkan oleh kepolisian dan sangat penting dalam transaksi jual beli kendaraan.</p>
        </section>

        <section id="motor" class="mb-12">
            <h2 class="text-2xl font-semibold mb-4">BPKP untuk Sepeda Motor</h2>
            <div class="bg-blue-50 border border-gray-300 rounded-lg p-6">
                <h3 class="text-xl font-semibold mb-4">Informasi BPKP Motor</h3>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Dokumen wajib untuk kepemilikan sepeda motor</li>
                    <li>Berisi data lengkap spesifikasi motor</li>
                    <li>Mencantumkan nomor rangka dan nomor mesin</li>
                    <li>Diperlukan saat proses jual beli motor</li>
                </ul>
            </div>
        </section>

        <section id="mobil" class="mb-12">
            <h2 class="text-2xl font-semibold mb-4">BPKP untuk Mobil</h2>
            <div class="bg-blue-50 border border-gray-300 rounded-lg p-6">
                <h3 class="text-xl font-semibold mb-4">Informasi BPKP Mobil</h3>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Dokumen resmi kepemilikan mobil</li>
                    <li>Memuat informasi detail kendaraan</li>
                    <li>Diperlukan untuk proses balik nama</li>
                    <li>Wajib dibawa saat transaksi jual beli</li>
                </ul>
            </div>
        </section>

        <section id="formulir">
            <h2 class="text-2xl font-semibold mb-4">Formulir Data Pemilik</h2>
            @livewire('contactform')
        </section>
    </div>
        
    @livewireScripts

</div>
</body>
</html>
