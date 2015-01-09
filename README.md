CityAide
========

I began **CityAide** as a final project in [Harvard's CS50x](https://www.edx.org/course/introduction-computer-science-harvardx-cs50x#.VKnv_abCdU8) online course, but wanted to create something that would go beyond the scope of the class. At the same time, my husband and I were looking into homes, so why not make a tool to simplify our search? Wouldn't this appeal to most home-buyers?

As renters in San Francisco, we were losing money that could be invested in a house – *"Our first home!"* we thought while trudging through numerous websites. My husband and I quickly agreed that a home can be renovated over time and shaped into a dream home, but a neighborhood? **A neighborhood is what it is**. The following snippets drove us to search for our ideal neighborhood:

> My husband and I both need the internet for work – crappy internet is not an option.

> After  you've bought your home, you can’t change the location of your grocery store or the school your kid(s) will attend. If only it were easier to reseach this *local* information from various cities using one website!

> We wanted specific city/county stats on employment rates, crime rates, air quality and the like while knowing the scope of the data.

> Where’s the nearest cafe, breakfast joint, gym, farmer’s market and ratings? We want to live in our home, but we don't want to feel caged there.

> Our there good bicycling routes? What about traffic – will we be stuck in the car for hours? 

> What about entertainment, beaches, mountains and other details – and how great would it be if we could customize these details to our preferences?

In many ways, the neighborhood is just as important, if not more, than buying the perfect home. There are great tools on the web, but to find all the data for *your needs* and *your lifestyle* can be lexhausting and inefficient. You're likely to end up in a realtor's office, crossing your fingers that you've found someone who will have your best interests in mind (over the strongly incentivizing dollar signs they will earn if you buy high . . . )


####Problems with existing websites

* **Property, property, property**: there are great websites out there that provide home details – prices, home history, mortgage history and the like – they are a great place to start and end. What they lack is reliable information on the neighborhood – as the saying goes, “Not seeing the forest for the trees”. Upon further research, I found that much of the additional data was too vague, superficial and frequently inaccurate.
* **(bad) data overload**: many websites try to fill the missing gap outlined above, but fail with over-cluttered data-overload -- often outdated or questionably reliable. Add to that a clunky interface and an inability to customize to your preferences and it's just a waste of time.


The more useful data you have relating to your needs and lifestyle, the better you can choose the right location to look for your home. That’s where CityAide comes in as a tool for visualizing the neighborhood around a potential home. It also helps because you know if a realtor is confirming what you have found or going in a completely different direction.


####CityAide Solution

* **a clean and intuitive interface**: one a home-buyer or renter can quickly customize – results that fit your lifestyle. It might even be useful for real estate agents.
* **transparent results**: Who collected the data? When? Where does it cover – state, city, county, etc? How accurate and reliable is the data and where can the user go for more information? 
* **rank and save locations**: Want a home next to a hip street with great local restaurants or the perfect school? Write a note and rank high. Don’t want to live in a place next to a busy intersection or by a summer motorcycle camp? Write a note and rank low -- *unless you’re into motorcycles*. We often looked at homes that we liked, marked, and then changed our minds for important details. We quickly lost track of these mental notes and, I'm sure, put the same homes back on our list of viable homes.


####Current Status/Work

**Languages**: CSS3, Javascript, PHP, HTML5

- [ ] **Clean Bootstrap Grid System on the backend** so that it is more consistent throughout code

- [ ] **Geocoding Addresses**
  - [x] use client-side Google geocoding to avoid usage restrictions
  - [ ] cleanup markers
  - [ ] autocomplete address
  - [ ] output address afterward to confirm result

- [ ] **Incorporate more APIs**
  - [x]  Broadbandmap.gov
  - [ ]  Add GreatSchools API –still need the php proxy? 
  - [ ]  note: I used Ben Alman’s [php proxy](http://benalman.com/projects/php-simple-proxy/) (Alman’s [GitHub Project](http://github.com/cowboy/php-simple-proxy)) to resolve a cross-domain issue that was blocking the API data during my course, but this *may* not be an issue now that I have a public domain.

- [ ]  **Make panels disappear/invisible** when the user hasn’t selected them for results

- [ ]  Reduce the **optional checkboxes** so that only the completed and available data will appear (i.e. many of the search options are not valid yet)

- [ ]  **Fresher design** (simple and exciting, but without a generic feel) -- farmland probably won’t appeal to most users

- [ ]  Broadband data – **fix the graphs** so that they appear for every company

- [ ]  add **more transparency** on broadband details – due credit to API, when was it collected? how frequently is it updated? what is the coverage considering the home? Same for other APIs. 

reminder: Maintain a consistent Bootstrap Grid System with new content!


####Long-Term

* Make personalized accounts an option using MySQL (MongoDB even better!)
* When logged-in to personal account, allow the user to rank and save searches
* Provide mini-note boxes where users can jot mental notes on homes – potential pluses and minuses regarding the property that can be hard to remember otherwise
* Business Model – I think it would be pretty easy to incorporate GoogleAds or the like to cover the small costs for keeping the site active

Long-long-term: allow users to change scopes (neighborhood block, county, zipcode, city, state) without inputting an address to get general breakdowns of bigger areas for “zooming into” the finer details

Long-long-long-term: get into other countries – great for expats, but if locals can personalize, it would be pretty wild


####Extra

* CS50x Course Final Project: [YouTube Video](https://www.youtube.com/watch?v=PUl5gZmXewQ) (note: changed website name to CityAide upon moving it to a public domain)
