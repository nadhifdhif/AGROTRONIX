import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: true,
    }),
  ],
  server: {
    host: true,
    cors: true,
    allowedHosts: [
      '.serveo.net', // ✅ allow domain Serveo
      'localhost',
      '127.0.0.1',
    ],
    hmr: {
      protocol: 'wss',
      host: 'vite-serveo.serveo.net', // ⚡ ganti sesuai domain Serveo Vite lo
      clientPort: 443, // Serveo udah handle HTTPS di port 443
    },
  },
})
