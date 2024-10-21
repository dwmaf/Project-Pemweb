import { defineConfig } from 'vite';

export default defineConfig({
  root: 'src', // Folder tempat file SCSS dan JS berada
  build: {
    outDir: '../dist', // Output hasil build
    emptyOutDir: true, // Kosongkan folder output sebelum build
  },
});
