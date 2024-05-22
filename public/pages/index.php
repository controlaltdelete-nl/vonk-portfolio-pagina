<?php 
/**
 * Index page
 * 
 * @category PHP
 * @package  ControlAltDelete_VonkPortolioPagina
 * @author   Michiel Gerritsen <info@controlaltdelete.nl>
 * @license  Beerware https://en.wikipedia.org/wiki/Beerware
 * @link     https://github.com/controlaltdelete-nl/vonk-portfolio-pagina
 */
/**
 * Retrieve all posts
 * 
 * @return SQLite3Result
 */
function posts():  SQLite3Result
{
    return db()->query("SELECT * FROM posts");
}

require __DIR__ . '/header.php'; 
?>

    <div class="mx-auto max-w-screen-lg px-3 py-6">
        <div class="flex flex-col items-center md:flex-row md:justify-between md:gap-x-24">
            <div><h1 class="text-3xl font-bold">Hi there, I&#x27;m <span
                            class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Vonk</span>
                    👋</h1>
                <p class="mt-6 text-xl leading-9">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                    <!-- --> <a class="text-cyan-400 hover:underline" href="/demo/astro-boilerplate">malesuada</a>
                    <!-- -->nisi tellus, non imperdiet nisi tempor at. Lorem ipsum dolor sit amet,<!-- --> <a
                            class="text-cyan-400 hover:underline" href="/demo/astro-boilerplate">consectetur</a>
                    <!-- -->adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                <div class="mt-3 flex gap-1"><a href="/demo/astro-boilerplate"><img
                                class="h-12 w-12 hover:translate-y-1" src="assets/images/twitter-icon.png"
                                alt="Twitter icon" loading="lazy"/></a><a href="/demo/astro-boilerplate"><img
                                class="h-12 w-12 hover:translate-y-1" src="assets/images/facebook-icon.png"
                                alt="Facebook icon" loading="lazy"/></a><a href="/demo/astro-boilerplate"><img
                                class="h-12 w-12 hover:translate-y-1" src="assets/images/linkedin-icon.png"
                                alt="Linkedin icon" loading="lazy"/></a><a href="/demo/astro-boilerplate"><img
                                class="h-12 w-12 hover:translate-y-1" src="assets/images/youtube-icon.png"
                                alt="Youtube icon" loading="lazy"/></a></div>
            </div>
            <div class="shrink-0"><img class="h-80 w-64" src="assets/images/avatar.svg" alt="Avatar image"
                                       loading="lazy"/></div>
        </div>
    </div>
    <div class="mx-auto max-w-screen-lg px-3 py-6">
        <div class="mb-6 text-2xl font-bold">Recent <span
                    class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Projects</span>
        </div>
        <div class="flex flex-col gap-6">
            <div class="flex flex-col items-center gap-x-8 rounded-md bg-slate-800 p-3 md:flex-row">
                <div class="shrink-0"><a href="/demo/astro-boilerplate"><img class="h-36 w-36 hover:translate-y-1"
                                                                             src="assets/images/project-web-design.png"
                                                                             alt="Project Web Design"
                                                                             loading="lazy"/></a></div>
                <div>
                    <div class="flex flex-col items-center gap-y-2 md:flex-row"><a class="hover:text-cyan-400"
                                                                                   href="/demo/astro-boilerplate">
                            <div class="text-xl font-semibold">Project 1</div>
                        </a>
                        <div class="ml-3 flex gap-2">
                            <div class="rounded-md px-2 py-1 text-xs font-semibold bg-fuchsia-400 text-fuchsia-900">
                                Astro.js
                            </div>
                            <div class="rounded-md px-2 py-1 text-xs font-semibold bg-lime-400 text-lime-900">Web
                                design
                            </div>
                            <div class="rounded-md px-2 py-1 text-xs font-semibold bg-sky-400 text-sky-900">
                                Tailwind.css
                            </div>
                            <div class="rounded-md px-2 py-1 text-xs font-semibold bg-rose-400 text-rose-900">
                                TypeScript
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                        bibendum. Nunc non posuere consectetur, justo erat semper enim, non
                        hendrerit dui odio id enim.</p></div>
            </div>
            <div class="flex flex-col items-center gap-x-8 rounded-md bg-slate-800 p-3 md:flex-row">
                <div class="shrink-0"><a href="/demo/astro-boilerplate"><img class="h-36 w-36 hover:translate-y-1"
                                                                             src="assets/images/project-fire.png"
                                                                             alt="Project Fire" loading="lazy"/></a>
                </div>
                <div>
                    <div class="flex flex-col items-center gap-y-2 md:flex-row"><a class="hover:text-cyan-400"
                                                                                   href="/demo/astro-boilerplate">
                            <div class="text-xl font-semibold">Project 2</div>
                        </a>
                        <div class="ml-3 flex gap-2">
                            <div class="rounded-md px-2 py-1 text-xs font-semibold bg-violet-400 text-violet-900">
                                Next.js
                            </div>
                            <div class="rounded-md px-2 py-1 text-xs font-semibold bg-emerald-400 text-emerald-900">
                                Blog
                            </div>
                            <div class="rounded-md px-2 py-1 text-xs font-semibold bg-yellow-400 text-yellow-900">
                                JavaScript
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                        bibendum. Nunc non posuere consectetur, justo erat semper enim, non
                        hendrerit dui odio id enim.</p></div>
            </div>
            <div class="flex flex-col items-center gap-x-8 rounded-md bg-slate-800 p-3 md:flex-row">
                <div class="shrink-0"><a href="/demo/astro-boilerplate"><img class="h-36 w-36 hover:translate-y-1"
                                                                             src="assets/images/project-maps.png"
                                                                             alt="Project Maps" loading="lazy"/></a>
                </div>
                <div>
                    <div class="flex flex-col items-center gap-y-2 md:flex-row"><a class="hover:text-cyan-400"
                                                                                   href="/demo/astro-boilerplate">
                            <div class="text-xl font-semibold">Project 3</div>
                        </a>
                        <div class="ml-3 flex gap-2">
                            <div class="rounded-md px-2 py-1 text-xs font-semibold bg-fuchsia-400 text-fuchsia-900">
                                Astro.js
                            </div>
                            <div class="rounded-md px-2 py-1 text-xs font-semibold bg-indigo-400 text-indigo-900">
                                Bootstrap
                            </div>
                            <div class="rounded-md px-2 py-1 text-xs font-semibold bg-rose-400 text-rose-900">
                                TypeScript
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                        bibendum. Nunc non posuere consectetur, justo erat semper enim, non
                        hendrerit dui odio id enim.</p></div>
            </div>
        </div>
    </div>
    <div class="mx-auto max-w-screen-lg px-3 py-6">
        <div class="mb-6 text-2xl font-bold">
            <div class="flex items-baseline justify-between">
                <div>Recent <span
                            class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Posts</span>
                </div>
                <div class="text-sm"><a href="/demo/astro-boilerplate/posts">View all Posts →</a></div>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
            <?php $posts = posts(); while ($post = $posts->fetchArray(SQLITE3_ASSOC)): ?>
                <a class="hover:translate-y-1" href="/demo/astro-boilerplate/posts/sixth-post">
                    <div class="overflow-hidden rounded-md bg-slate-800">
                        <div class="aspect-w-3 aspect-h-2"></div>
                        <div class="px-3 pt-4 pb-6 text-center"><h2 class="text-xl font-semibold"><?php echo $post['title']; ?></h2>
                            <div class="mt-1 text-xs text-gray-400"><?php echo $post['date']; ?></div>
                            <div class="mt-2 text-sm"><?php echo $post['description']; ?>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endwhile; ?>
            <a class="hover:translate-y-1" href="/demo/astro-boilerplate/posts/sixth-post">
                <div class="overflow-hidden rounded-md bg-slate-800">
                    <div class="aspect-w-3 aspect-h-2"></div>
                    <div class="px-3 pt-4 pb-6 text-center"><h2 class="text-xl font-semibold">Typography example</h2>
                        <div class="mt-1 text-xs text-gray-400">Feb 6, 2020</div>
                        <div class="mt-2 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur vero
                            esse non molestias eos excepturi.
                        </div>
                    </div>
                </div>
            </a>
            
            <a class="hover:translate-y-1" href="/demo/astro-boilerplate/posts/fifth-post">
                <div class="overflow-hidden rounded-md bg-slate-800">
                    <div class="aspect-w-3 aspect-h-2"></div>
                    <div class="px-3 pt-4 pb-6 text-center"><h2 class="text-xl font-semibold">5th Lorem ipsum dolor
                            sit</h2>
                        <div class="mt-1 text-xs text-gray-400">Feb 5, 2020</div>
                        <div class="mt-2 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur vero
                            esse non molestias eos excepturi.
                        </div>
                    </div>
                </div>
            </a>
            
            <a class="hover:translate-y-1" href="/demo/astro-boilerplate/posts/forth-post">
                <div class="overflow-hidden rounded-md bg-slate-800">
                    <div class="aspect-w-3 aspect-h-2"></div>
                    <div class="px-3 pt-4 pb-6 text-center"><h2 class="text-xl font-semibold">4th Lorem ipsum dolor
                            sit</h2>
                        <div class="mt-1 text-xs text-gray-400">Feb 4, 2020</div>
                        <div class="mt-2 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur vero
                            esse non molestias eos excepturi.
                        </div>
                    </div>
                </div>
            </a></div>
    </div>

<?php require __DIR__ . '/footer.php'; ?>