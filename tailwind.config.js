/** @type {import('tailwindcss').Config} */
export default {
    mode: "jit", // Aktifkan mode JIT (Just-In-Time)
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            backgroundColor: {
                bg: "#aaaa",
            },
        },
    },
    plugins: [
        // Daftarkan plugin jika diperlukan
    ],
};
