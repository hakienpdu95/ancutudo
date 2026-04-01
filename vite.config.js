import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { wordpressPlugin, wordpressThemeJson } from '@roots/vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy';
import path from 'path';

export default defineConfig({
  base: '/wp-content/themes/ancutudo/public/build/',
  resolve: {
      alias: {
          '@': path.resolve(__dirname, 'resources'),
      },
  },
  plugins: [
    laravel({
      input: [
        'resources/css/icon.min.css',
        'resources/css/app.css',      
        'resources/css/main.scss',    
        'resources/js/jquery.js',
        'resources/js/app.js',
        'resources/css/editor.css',
        'resources/js/editor.js',
      ],
      refresh: true,
    }),
    wordpressPlugin(),
    wordpressThemeJson({
      disableTailwindColors: true,
      disableTailwindFonts: true,
      disableTailwindFontSizes: true,
    }),
    viteStaticCopy({ targets: [
      { src: 'resources/images/*', dest: 'images' },
      { src: 'resources/fonts/*', dest: 'fonts' },
      { 
        src: 'node_modules/fomantic-ui-css/themes/default/assets/fonts/*',
        dest: 'themes/default/assets/fonts' 
      }
    ] })
  ],

  css: {
    devSourcemap: false,
    preprocessorOptions: {
      scss: {
        api: 'modern',
        silenceDeprecations: ['color-functions', 'global-builtin', 'import'],
      }
    }
  },

  build: {
    rollupOptions: {
      output: {
        manualChunks(id) {
          if (id.includes('alpinejs')) return 'vendor-alpine';
          if (id.includes('@splidejs/splide')) return 'vendor-splide';
          if (id.includes('node_modules')) return 'vendor';
        },
        assetFileNames: (assetInfo) => {
          if (assetInfo.name?.endsWith('.css') && assetInfo.originalName?.includes('main.scss')) {
            return 'assets/main.[hash].[ext]';
          }
          if (assetInfo.name?.endsWith('.css')) {
            return 'assets/[name].[hash].[ext]';
          }
          return 'assets/[name].[hash].[ext]';
        },
        entryFileNames: 'assets/[name].[hash].js',
        chunkFileNames: 'assets/[name].[hash].js',
      }
    },
    minify: 'esbuild',
    sourcemap: false,
    assetsInlineLimit: 4096,
    reportCompressedSize: true,
  }
});