tailwind.config = {
    darkMode: 'class', // Mengaktifkan mode 'class'
    theme: {
        extend: {
            // Definisikan font keluarga baru
            fontFamily: {
                sans: ['Inter', 'sans-serif'],
                serif: ['Playfair Display', 'serif']
            },
            // Definisikan palet warna baru
            colors: {
                slate: {
                    50: '#f8fafc',
                    100: '#f1f5f9',
                    200: '#e2e8f0',
                    300: '#cbd5e1',
                    400: '#94a3b8',
                    500: '#64748b',
                    600: '#475569',
                    700: '#334155',
                    800: '#1e293b',
                    900: '#0f172a',
                    950: '#020617'
                }
            }
        }
    }
}