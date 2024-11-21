document.addEventListener('DOMContentLoaded', function () {
    const kategoriSelect = document.getElementById('kategori');
    const subkategoriContainer = document.getElementById('subkategori-container');
    const subkategoriSelect = document.getElementById('subkategori');

    kategoriSelect.addEventListener('change', function () {
        const selectedCategory = kategoriSelect.value;

        // Menyembunyikan subkategori jika tidak ada kategori yang dipilih
        subkategoriContainer.style.display = 'none';
        subkategoriSelect.innerHTML = ''; // Menghapus subkategori yang sebelumnya

        if (selectedCategory) {
            subkategoriContainer.style.display = 'block'; // Menampilkan subkategori

            // Menambahkan subkategori berdasarkan kategori yang dipilih
            let options = [];
            if (selectedCategory === 'liquid') {
                options = [
                    { value: 'saltnic', text: 'Saltnic' },
                    { value: 'freebase', text: 'Free Base' }
                ];
            } else if (selectedCategory === 'device') {
                options = [
                    { value: 'mod', text: 'Mod' },
                    { value: 'pod', text: 'Pod' },
                    { value: 'aio', text: 'AIO' }
                ];
            } else if (selectedCategory === 'component') {
                options = [
                    { value: 'coil', text: 'Coil' },
                    { value: 'rda', text: 'RDA' },
                    { value: 'rta', text: 'RTA' },
                    { value: 'mtl', text: 'MTL' },
                    { value: 'baterai', text: 'Baterai' },
                    { value: 'toolkit', text: 'Toolkit' }
                ];
            }

            // Menambahkan opsi subkategori ke dropdown
            options.forEach(option => {
                const opt = document.createElement('option');
                opt.value = option.value;
                opt.textContent = option.text;
                subkategoriSelect.appendChild(opt);
            });
        }
    });
});
