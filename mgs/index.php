<?php
$data = array( 
    'title' => 'Mulia Group Sleman',
    'dashboard' => array(
        'section_1' => 'Mencari mitra untuk melaksanakan event organizer di Sleman ?',
        'section_2' => 'Mulai dari kebutuhan akan sewa tenda, job fair, dan sebagainya, silahkan kontak kami untuk aneka kebutuhan jasa persewaan tenda di Sleman'
    ),
    'about' => array(
        'section_1' => 'Kami merupakan salah satu penyedia layanan penyewaan tenda terbesar dan terlengkap di Sleman mulai dari tenda pesta pernikahan, job fair, pameran, pengajian, dsb. Selain it kami juga menyediakan persewaan alat-alat pesta seperti tenda dekorasi, kursi futura, meja pelaminan, partisi, panggung, dll yang berhubungan dengan segala jenis acara yang akan anda laksanakan',
        'section_2' => 'Sudah hampir sepuluh tahun kami menjalankan usaha yang bergerak dibidang jasa sewa tenda pesta pernikahan, selama kurun waktu tersebut sudah banyak acara pernikahan, khitanan maupun acara acara yang berhubungan dengan kegiatan di instansi dan perusahaan. Didukung oleh peralatan yang mencukupi untuk menghandle berbagai jenis acara yang Anda butuhkan. Selain itu pula, kami memiliki team yang solid dan berpengalaman untuk membantu Anda agar dapat menyelenggarakan segala jenis acara yang Anda butuhkan. Kami adalah partner yang terpercaya, berpengalaman dan handal tentang dekorasi tenda pesta. Kesuksesan acara/event Anda merupakan kesuksesan untuk kami.'
    ),
    'package'  => array(
        'section_1' => 'Paket Acara Pernikahan',
        'section_2' => 'Paket Acara Pengajian',
        'section_3' => 'Paket Acara Pameran',
        'section_4' => 'Paket Acara Dinas'
    ),
    'services'  => array(
        'section_1' => array(
            'subsection_1' => 'Tenda',
            'subsection_2' => 'Tenda pernikahan, pengajian, pameran, ulang tahun, acara dinas, dsb'
        ),
        'section_2' => array(
            'subsection_1' => 'Sound system',
            'subsection_2' => 'Microphone, amplifier, mixer, speaker, dsb'
        ),
        'section_3' => array(
            'subsection_1' => 'Alat pesta',
            'subsection_2' => 'Gelas, piring, sendok, meja, dsb'
        ),
        'section_4' => array(
            'subsection_1' => 'Berbagai dekorasi acara pernikahan, pengajian, pameran, dsb',
            'subsection_2' => 'Dekorasi'
        )
    ),
);

echo json_encode([
    'results' => $data
]);
?>