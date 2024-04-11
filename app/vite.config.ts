import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";

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
        laravel({
            input: ["resources/scss/app.scss", "resources/ts/app.ts"],
            refresh: true,
        }),
    ],
});
