import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";
import checker from "vite-plugin-checker";

export default defineConfig({
    server: {
        host: true,
        port: 3000,
        hmr: {
            host: "localhost",
        },
    },
    plugins: [
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
                // compilerOptions: {
                //     isCustomElement: (tag) => {
                //         return tag.startsWith("vue-");
                //     },
                // },
            },
        }),
        checker({
            vueTsc: true,
            overlay: true,
            eslint: {
                lintCommand: 'eslint  "resources/ts/**/*.{js,ts,vue}"',
                dev: {
                    logLevel: ["error"],
                },
            },
        }),
        laravel({
            input: ["resources/scss/app.scss", "resources/ts/app.ts"],
            refresh: true,
        }),
    ],
});
