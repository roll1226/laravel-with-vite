import vue from "@vitejs/plugin-vue";
import laravel from "laravel-vite-plugin";
import { defineConfig } from "vite";

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
            },
        }),
        laravel({
            input: ["resources/scss/app.scss", "resources/ts/app.ts"],
            refresh: true,
        }),
    ],
});
