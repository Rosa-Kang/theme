import { defineConfig } from 'vite';

export default defineConfig({
  base: '/',
  server: {
    hmr: {
      host: 'localhost',
    },
    watch: {
      usePolling: true,
    },
    host: '0.0.0.0',
    port: 5173,
  },
  build: {
    outDir: 'dist',
    emptyOutDir: true,
    manifest: true,
    rollupOptions: {
      input: './src/input.css',
    },
  },
});