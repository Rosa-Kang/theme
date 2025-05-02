import { defineConfig } from 'vite';
import postcss from './postcss.config.js';

export default defineConfig({
  root: '.', // 테마 루트 디렉터리 기준
  server: {
    hmr: true, 
    watch: {
      usePolling: true, 
    },
    host: '0.0.0.0', 
    port: 5173, 
  },
  build: {
    outDir: 'dist',
    emptyOutDir: true,
    rollupOptions: {
      input: {
        main: './src/input.css',
      },
      output: {
        assetFileNames: '[name][extname]',
        entryFileNames: '[name].js',
      },
    },
  },
  css: {
    postcss,
  },
});
