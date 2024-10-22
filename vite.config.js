import { defineConfig } from 'vite';
import viteSass from 'vite-plugin-sass';

export default defineConfig({
  root: 'src', // Folder tempat file SCSS dan JS berada
  build: {
    outDir: '../dist', // Output hasil build
    emptyOutDir: true, // Kosongkan folder output sebelum build
  },
  plugins: [(viteSass)],
});
