import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import fg from "fast-glob";

const cssFiles = fg.sync("resources/css/*.css");
const jsFiles = fg.sync("resources/js/*.js");

export default defineConfig({
    plugins: [
        laravel({
            input: [...cssFiles, ...jsFiles],
            refresh: true,
        }),
    ],
});
