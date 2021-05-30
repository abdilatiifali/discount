
const search = instantsearch({
indexName: "products",
searchClient: instantMeiliSearch(
    "http://127.0.0.1:7700",
    'latiifabdi'
)
});

search.addWidgets([
  instantsearch.widgets.searchBox({
      container: "#searchbox"
  }),
  instantsearch.widgets.configure({ hitsPerPage: 6 }),
  instantsearch.widgets.hits({
      container: "#hits",
      templates: {
      item: `

          <div class="flex space-x-4">
            <img 
              style="margin-right: 20px;" 
              class="rounded-lg  mr-4 w-8 h-8" 
              src="/{{#helpers.highlight}}{ "attribute": "image" }{{/helpers.highlight}}" 
              align="left" alt="" 
            />
            <div class="hit-name">
                <a 
                  class="text-gray-900"
                  href="/products/{{#helpers.highlight}}{ "attribute": "id" }{{/helpers.highlight}}"
                >
                  {{#helpers.highlight}}{ "attribute": "name" }{{/helpers.highlight}}
                </a>
            </div>
            <div>
              {{ id }}
            </div>
            <div style="margin-left: auto" class="hit-price ml-auto">
               {{#helpers.highlight}}{ "attribute": "price" }{{/helpers.highlight}}
             </div>

          </div>
      `

      }
  })
]);
search.start();
