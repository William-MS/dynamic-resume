const cacheName = 'v1';

const resourcesToPrecache = [
  '/',
  'index.php',
  '/assets/icons/favicon.ico',
  '/assets/icons/icon-192x192.png',
  '/assets/icons/icon-512x512.png',
  '/assets/css/site/index.css',
  '/assets/css/site/home.css',
  '/assets/js/xhttp.js',
  '/assets/js/site/home.js',
];

self.addEventListener('install', (event)=>
{
  event.waitUtil(
    caches.open(cacheName)
    .then(cache => (cache.addAll(resourcesToPrecache)))
  );
});

self.addEventListener('fetch', (event)=>
{
  event.respondWith(
    caches.match(event.request)
    .then(cacheResponse => (cacheResponse || fetch(event.request)))
  )
})