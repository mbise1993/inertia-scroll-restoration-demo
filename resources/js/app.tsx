import { createInertiaApp } from "@inertiajs/react";
import { createRoot } from "react-dom/client";

createInertiaApp({
    title: (title) => `${title} - React Playground`,
    resolve: (name) => {
        const pages: Record<string, () => Promise<any>> = import.meta.glob(
            "./Pages/**/*.tsx"
        );
        const page = pages[`./Pages/${name}.tsx`];
        if (!page) {
            throw new Error(`Unable to resolve page for route "${name}"`);
        }

        const pagePromise = page();
        Promise.resolve(pagePromise).then((pageModule) => {
            pageModule.default.layout = pageModule.default.layout ?? []; // set some default AppLayout here
        });

        return pagePromise;
    },
    setup({ el, App, props }) {
        // hydrateRoot(el, <App {...props} />)
        createRoot(el).render(<App {...props} />);
    },
});
