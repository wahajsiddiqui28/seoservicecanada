<?php
/**
 * Premium Service Page Data
 *
 * Content for the 6 SEO service pages. Rendered by
 * page-templates/page-service-premium.php — keyed by page slug.
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

function ssc_get_service_page_data($key) {
    $services = array(

        // =============================================
        //  ECOMMERCE SEO SERVICES
        // =============================================
        'ecommerce-seo-services' => array(
            'name'        => 'Ecommerce SEO Services',
            'accent'      => '#7c3aed',
            'accent_dark' => '#5b21b6',

            'meta_title'       => 'Ecommerce SEO Services | Best SEO for Online Stores',
            'meta_description' => 'Looking for ecommerce SEO services that actually drive sales? SEO Service Canada builds custom SEO strategies for online stores that rank, convert, and grow.',

            'hero_heading' => 'Ecommerce SEO Services: Turn Organic Traffic Into Sales',
            'hero_paragraphs' => array(
                "Running an online store is competitive. You are not just competing with the shop down the street. You are competing with every other retailer in Canada who sells what you sell, including major platforms that spend millions on their digital presence. Paid ads can generate traffic, but the moment your budget pauses, so does your visibility.",
                "Ecommerce SEO is different. It builds a compounding channel that keeps working around the clock, independent of your ad spend. When your product and category pages rank on the first page of Google for the terms your customers are actively searching, every click is qualified, organic, and essentially free.",
                "SEO Service Canada provides ecommerce SEO services for Canadian online stores of all sizes. Whether you are on Shopify, WooCommerce, BigCommerce, or a custom platform, we build data-driven strategies that improve your rankings, grow your organic traffic, and most importantly, increase your revenue. Not just visits. Sales.",
            ),

            'about_heading' => 'Why Ecommerce SEO Is Not the Same as Regular SEO',
            'about_paragraphs' => array(
                "Most SEO agencies treat an online store like a service website with a few extra pages. That approach fails, and it fails fast. Ecommerce SEO requires an entirely different playbook. Your store might have hundreds or thousands of product pages, each one a ranking opportunity and a potential duplicate content risk at the same time.",
                "Category page architecture, faceted navigation, canonical tags, product schema markup, pagination, and site crawl efficiency all become critical at scale. A technical issue that would barely affect a five-page website can suppress the rankings of an entire product catalogue across hundreds of URLs.",
                "Beyond the technical layer, ecommerce SEO is conversion-oriented by design. Getting traffic to a product page is only half the job. That page also needs to be structured to convert. Title, description, images, schema, reviews, and internal linking all work together to turn a ranking into a sale. Our ecommerce SEO specialists understand both sides of that equation.",
            ),

            'services_heading' => 'Our Ecommerce SEO Services',
            'services_intro'   => 'Every ecommerce SEO campaign we run is built around your store, your product catalogue, your platform, and your Canadian customer base. Here is what we deliver:',
            'services' => array(
                array('title' => 'Ecommerce Technical SEO Audit', 'desc' => "We crawl your entire store and identify every technical issue affecting your rankings. Crawl budget waste, duplicate product content, missing canonical tags, slow page load times, broken internal links, indexation errors, Core Web Vitals failures, and mobile usability issues are all surfaced and prioritised. You receive a clear, actionable audit report your developer can implement immediately to start recovering and improving rankings."),
                array('title' => 'Product and Category Page Optimisation', 'desc' => "Your product and category pages are your highest-value SEO assets. We optimise title tags, meta descriptions, H1 headings, product copy, and image alt text for real search queries. Category pages get structural improvements that help them rank for broader commercial keywords, while product pages are refined to rank for specific buying-intent searches. Both are written for Google and for the customer reading the page."),
                array('title' => 'Keyword Research for Online Stores', 'desc' => "Ecommerce keyword research requires mapping search intent at every stage of the buying journey. We identify informational keywords that attract early-stage shoppers, comparison keywords that capture mid-funnel researchers, and high-intent buying keywords that convert. Every keyword is mapped to the right page type in your store so your architecture supports the full customer journey from discovery to checkout."),
                array('title' => 'Ecommerce Content Strategy', 'desc' => "Blog content, buying guides, comparison pages, and FAQs build topical authority for your store and capture long-tail search traffic that product pages alone cannot rank for. We develop a content plan targeting the questions your customers ask before they buy, building trust and SEO authority simultaneously. For Canadian ecommerce stores, this also means targeting location-relevant queries that national retailers often ignore."),
                array('title' => 'Link Building for Ecommerce', 'desc' => "Domain authority separates stores that rank from those that do not. We build quality backlinks for your ecommerce website through digital PR, product features, industry publications, and ethical outreach. Every link we earn strengthens your store's authority and supports rankings across your entire product catalogue, not just your homepage."),
                array('title' => 'Schema Markup and Rich Results', 'desc' => "Product schema, review schema, breadcrumb schema, and FAQ schema make your store eligible for rich results in Google, including star ratings, price information, and availability directly in the search results. These rich snippets increase click-through rates significantly and give your listings a visual edge over competitors who have not implemented structured data correctly."),
                array('title' => 'Site Architecture and Internal Linking', 'desc' => "How your store is structured determines how effectively Google distributes authority across your pages. We audit and improve your internal link structure, category hierarchy, breadcrumb navigation, and page depth to ensure authority flows from your strongest pages to your product and category pages that need ranking power the most."),
            ),

            'choose_heading' => 'Why Ecommerce Brands Choose SEO Service Canada',
            'choose_items' => array(
                array('title' => 'Revenue-Focused Strategy', 'desc' => "We measure ecommerce SEO success by traffic that converts, not just rankings. Every campaign is built with your sales goals in mind, not vanity metrics."),
                array('title' => 'Platform-Agnostic Expertise', 'desc' => "Shopify, WooCommerce, BigCommerce, Magento, or custom builds. We understand the technical SEO requirements and constraints of each platform."),
                array('title' => 'Canadian Market Focus', 'desc' => "We target Canadian search behaviour, seasonal trends, and Canadian buyer intent. Your SEO strategy is built for the market your customers actually shop in."),
                array('title' => 'No Long-Term Contracts', 'desc' => "Our ecommerce clients stay because their organic revenue grows. Not because a contract forces them to."),
                array('title' => 'Transparent Monthly Reporting', 'desc' => "Rankings, organic traffic, revenue attribution, and campaign progress delivered in a clear monthly report you can actually understand."),
            ),

            'team_heading' => 'The Ecommerce SEO Specialists Behind Your Campaign',
            'team' => array(
                array('name' => 'Maaz Ahmed', 'role' => 'SEO Expert', 'desc' => "Maaz has over 6 years of experience with a specialisation in technical SEO and ecommerce architecture. He has audited and optimised online stores across multiple platforms, resolving complex crawl, indexation, and performance issues that were silently suppressing revenue. His data-first methodology is built for the scale and complexity that ecommerce SEO demands.", 'image' => 'maaz-ahmed.webp'),
                array('name' => 'Wahaj Siddiqui', 'role' => 'Head of Development', 'desc' => "Wahaj brings 7 years of development and technical SEO experience and understands exactly how platform constraints, theme architecture, and app conflicts affect Shopify and WooCommerce store performance. He ensures every technical recommendation is correctly implemented rather than lost in translation between SEO and development.", 'image' => 'profile-pic.webp'),
            ),

            'process_heading' => 'Our Ecommerce SEO Process',
            'process_steps' => array(
                array('title' => 'Full Store Audit', 'desc' => "We crawl your store, review your current rankings, identify every technical issue, and benchmark your performance against your top organic competitors. This gives us a clear picture of exactly what is limiting your store's visibility right now."),
                array('title' => 'Keyword and Intent Mapping', 'desc' => "We research the full spectrum of search queries your customers use across every stage of their buying journey and map them to the right pages in your store architecture."),
                array('title' => 'Technical and On-Page Implementation', 'desc' => "We fix crawl issues, implement schema markup, optimise product and category pages, improve site speed, and ensure your store structure is built for maximum organic visibility."),
                array('title' => 'Content and Authority Building', 'desc' => "We develop content that builds topical authority for your store and earn quality backlinks that strengthen your domain's ranking power across your product catalogue."),
                array('title' => 'Monthly Reporting and Revenue Tracking', 'desc' => "You receive a monthly report tracking rankings, organic traffic, and where possible, organic revenue attribution. We review results together and refine the strategy based on real performance data."),
            ),

            'list_heading' => 'Ecommerce Platforms We Work With',
            'list_items' => array(
                'Shopify and Shopify Plus',
                'WooCommerce',
                'BigCommerce',
                'Magento',
                'Wix eCommerce',
                'Squarespace',
                'Custom-built ecommerce platforms',
            ),

            'faq_heading' => 'Frequently Asked Questions: Ecommerce SEO Services',
            'faqs' => array(
                array('q' => 'What is ecommerce SEO and why does it matter for online stores?', 'a' => "Ecommerce SEO is the process of optimising an online store so its product pages, category pages, and content rank higher in Google search results. It matters because organic search is one of the highest-converting traffic sources for online retailers. Unlike paid advertising, which stops driving traffic the moment your budget runs out, a well-optimised ecommerce store continues attracting qualified buyers through Google without ongoing ad spend. For Canadian online stores, SEO also means capturing customers who are actively searching for your products right now."),
                array('q' => 'How is ecommerce SEO different from regular website SEO?', 'a' => "Ecommerce SEO operates at a different scale and with different technical requirements. Large product catalogues introduce crawl budget challenges, duplicate content risks from product variants, and complex URL structures that need careful management. Product and category pages require conversion-focused optimisation alongside ranking optimisation. Schema markup for products, reviews, and pricing requires specific implementation. The keyword strategy must map to buying intent at every stage of the purchase journey, not just general awareness. A generic SEO approach applied to an ecommerce store will consistently underperform."),
                array('q' => 'How long does ecommerce SEO take to show results?', 'a' => "Most online stores see measurable improvements in organic rankings and traffic within 3 to 6 months of starting a focused ecommerce SEO campaign. Stores with significant technical issues often see faster initial gains once those issues are resolved, because fixing crawl and indexation problems can unlock ranking potential that already exists but is being suppressed. Competitive product categories may take longer to move, particularly in markets with well-established national retailers. SEO compounds over time, meaning results strengthen the longer the campaign runs."),
                array('q' => 'What are the most important technical SEO issues for ecommerce websites?', 'a' => "The most common and impactful technical SEO issues we see on ecommerce stores are: duplicate content from product variants and filtered URLs, poor crawl budget management causing important product pages to be under-crawled, missing or incorrect canonical tags, slow page load times and poor Core Web Vitals scores, mobile usability issues, broken internal links in large catalogues, and missing product schema markup. Any one of these can suppress rankings across hundreds of pages. Our technical audit surfaces all of them and prioritises fixes by impact."),
                array('q' => 'Can SEO increase ecommerce conversion rates, not just traffic?', 'a' => "Yes, and this is one of the most underappreciated aspects of ecommerce SEO. Better keyword targeting means the traffic arriving at your product pages has higher purchase intent. Schema markup that adds star ratings and pricing to your search listings increases click-through rates and pre-qualifies visitors before they land. Improved page structure, cleaner internal navigation, and faster load times all contribute to better on-site conversion. SEO and CRO are closely connected for online stores, and our approach addresses both."),
                array('q' => 'Do you offer ecommerce SEO for small online stores, not just large retailers?', 'a' => "Yes. Small and medium-sized Canadian ecommerce businesses are exactly who benefit most from professional SEO services. Large retailers often have in-house SEO teams and established domain authority. Smaller stores that invest in SEO early build compounding organic visibility that levels the playing field over time. We build ecommerce SEO campaigns scaled to your store's current size, catalogue depth, and growth goals."),
                array('q' => "How does Google's AI Overview affect ecommerce search results?", 'a' => "Google's AI Overviews appear more frequently for informational ecommerce queries, particularly comparison and buying guide searches. To capture visibility in AI-generated results alongside traditional organic rankings, your ecommerce content needs to be structured clearly, answer specific customer questions directly, and demonstrate product expertise and authority. Our ecommerce content strategy is built to target both traditional search rankings and AI Overview placements simultaneously."),
            ),

            'cta_heading' => 'Ready to Grow Your Online Store With SEO?',
            'cta_paragraphs' => array(
                "Your competitors are investing in ecommerce SEO right now. Every day your product pages sit below theirs in Google, you are leaving qualified organic traffic and direct revenue on the table. SEO Service Canada builds ecommerce SEO campaigns that are focused on one outcome: growing your organic sales. Let us audit your store and show you exactly where the opportunities are.",
                "Contact SEO Service Canada today for your SEO Audit.",
            ),
        ),

        // =============================================
        //  LOCAL SEO SERVICES
        // =============================================
        'local-seo-services' => array(
            'name'        => 'Local SEO Services',
            'accent'      => '#0e7c61',
            'accent_dark' => '#065f46',

            'meta_title'       => 'Local SEO Services in Canada | Affordable Local SEO Company',
            'meta_description' => 'Looking for the best local SEO services in Canada? SEO Service Canada helps small and local businesses rank on Google, attract nearby customers, and grow.',

            'hero_heading' => 'Local SEO Services: Get Found by Customers in Your Area',
            'hero_paragraphs' => array(
                "When someone in your city searches for what your business offers, your name should be one of the first things they see. That is what local SEO does. It puts your business in front of the right people, in the right place, at exactly the right moment.",
                "Local search is fundamentally different from broad organic SEO. The customer searching \"dentist near me\" or \"best plumber in Mississauga\" is not browsing. They are ready to call. Google's local results, including the map pack, capture the majority of clicks for these searches. Businesses that appear there earn a disproportionate share of local business. Those that do not are largely invisible to that audience.",
                "SEO Service Canada provides professional local SEO services for Canadian businesses of all sizes. From independent tradespeople to multi-location service companies, we build location-specific strategies that improve your Google visibility, fill your Google Business Profile with accurate and compelling information, and bring more qualified local customers to your door, your phone, or your inbox.",
            ),

            'about_heading' => 'What Local SEO Actually Does for Your Business',
            'about_paragraphs' => array(
                "Local SEO is the practice of optimising your online presence so Google serves your business to customers searching in your geographic area. It is not just about keywords on your website. It is an interconnected set of signals that tell Google exactly where you operate, what you offer, and why you are worth showing to a local searcher.",
                "The three most visible outcomes of effective local SEO are: ranking in the local map pack (the three businesses Google shows with a map at the top of local search results), ranking in organic search results for location-based keywords, and appearing in Google's AI Overview answers for local service queries.",
                "For small and medium-sized Canadian businesses, local SEO delivers some of the highest return on investment of any digital marketing channel. The customers it attracts are already looking for you. You are not interrupting their browsing or pushing ads at people who are not interested. You are simply making sure that when they search, they find you.",
            ),

            'services_heading' => 'Our Local SEO Services',
            'services_intro'   => 'SEO Service Canada delivers a complete local SEO solution built around your specific business, your location, and the customers you want to reach across Canada.',
            'services' => array(
                array('title' => 'Google Business Profile Optimisation', 'desc' => "Your Google Business Profile is the single most important asset in your local SEO strategy. It powers your placement in the map pack, drives phone calls and direction requests directly from Google, and is often the first impression a potential customer gets of your business. We audit and fully optimise your profile, including business categories, service areas, description, photos, posting cadence, and review strategy. A properly managed profile consistently outranks neglected competitors in the same market."),
                array('title' => 'Local Keyword Research and On-Page Optimisation', 'desc' => "We identify the specific search terms local customers use when looking for your services in your city or region. These keywords are then integrated naturally into your website's page titles, headings, meta descriptions, and content. Every location-specific page is structured to rank for both map pack and organic results, giving your business multiple touchpoints on the same Google search results page."),
                array('title' => 'Local Citation Building and Cleanup', 'desc' => "Citations are mentions of your business name, address, and phone number across the web. Consistency and accuracy across directories, platforms, and local listings is a fundamental local SEO signal. We build new citations in relevant Canadian directories and clean up any existing inconsistencies that could be confusing Google about your business location and identity. Consistent NAP data is foundational to map pack rankings."),
                array('title' => 'Location Page Creation and Optimisation', 'desc' => "If your business serves multiple cities or regions, each location needs its own optimised page. Generic \"areas we serve\" lists do not rank. We build dedicated, locally-relevant landing pages for each of your service areas, incorporating local keywords, community references, and structured data so Google understands the geographic scope of your services and ranks you appropriately across each market."),
                array('title' => 'Review Strategy and Reputation Management', 'desc' => "Google reviews are a direct local ranking factor. Volume, recency, and sentiment all contribute to your map pack position. We help you build a consistent review acquisition strategy that grows your review count over time, and we advise on best-practice response approaches that show both Google and potential customers that your business is active and customer-focused."),
                array('title' => 'Local Link Building', 'desc' => "Backlinks from locally relevant websites, including community organisations, local media, industry associations, and neighbourhood directories, send strong geographic authority signals to Google. We build local link profiles through outreach, community PR, and strategic content that earns citations from credible sources in your market."),
            ),

            'choose_heading' => 'Why Canadian Businesses Choose SEO Service Canada for Local SEO',
            'choose_items' => array(
                array('title' => 'Canada-Wide Local Expertise', 'desc' => "We serve businesses across every province and major city in Canada. We understand how local search behaviour differs between Toronto, Vancouver, Halifax, and Saskatoon, and we build strategies that reflect those differences."),
                array('title' => 'Affordable Local SEO That Delivers Real Results', 'desc' => "Local SEO does not require a massive budget. We build campaigns scaled to your business size and market, delivering measurable improvements in map pack rankings and local organic traffic."),
                array('title' => 'Google Business Profile Management', 'desc' => "We handle ongoing profile optimisation, post updates, photo management, and review monitoring so your profile stays competitive without demanding your time."),
                array('title' => 'No Long-Term Contracts', 'desc' => "Our local SEO clients stay because their phone rings more often. Not because they are locked into a contract."),
                array('title' => 'Clear, Honest Reporting', 'desc' => "Monthly reports showing your map pack positions, local keyword rankings, and profile engagement metrics. No spin, no confusion, no inflated numbers."),
            ),

            'team_heading' => 'Meet the Team Behind Your Local SEO Campaign',
            'team' => array(
                array('name' => 'Tauqeer Ahmed', 'role' => 'Leading SEO Specialist', 'desc' => "Tauqeer leads local and organic SEO campaigns across Canadian markets with a focus on sustainable growth and measurable outcomes. His experience spans businesses from single-location independents to multi-location service companies across provinces, giving him a practical understanding of what moves local rankings in Canada's diverse markets.", 'image' => 'tauqeer-bhai-image.webp'),
                array('name' => 'Nooruddin Farishta', 'role' => 'Head of Marketing and Sales Canada', 'desc' => "Nooruddin oversees campaign strategy and client growth with deep experience in Canadian digital marketing. He ensures every local SEO campaign is structured around genuine business goals and that results are connected to real commercial outcomes, not just ranking movements.", 'image' => 'nooruddin-farishta.jpeg'),
            ),

            'process_heading' => 'Our Local SEO Process',
            'process_steps' => array(
                array('title' => 'Local SEO Audit', 'desc' => "We assess your current local visibility, audit your Google Business Profile, review your citation landscape, analyse your local competitors, and identify the specific gaps holding your business back from stronger map pack and organic positions."),
                array('title' => 'Local Keyword Strategy', 'desc' => "We research the exact terms your local customers use and build a keyword map covering your service pages, location pages, and Google Business Profile. Every keyword is chosen for local intent and geographic relevance."),
                array('title' => 'Profile and On-Page Optimisation', 'desc' => "We optimise your Google Business Profile fully and make on-page improvements to your website's location pages, meta data, and content structure to align with local search signals."),
                array('title' => 'Citations, Reviews, and Links', 'desc' => "We build and clean up your citation profile, launch a review acquisition strategy, and develop locally relevant backlinks that strengthen your authority in your specific market."),
                array('title' => 'Monthly Reporting and Optimisation', 'desc' => "You receive a clear monthly report covering map pack positions, local keyword rankings, and profile metrics. We review and refine the strategy regularly to keep your local visibility growing."),
            ),

            'list_heading' => 'Industries That Benefit Most from Local SEO in Canada',
            'list_items' => array(
                'Dental and Medical Clinics',
                'Law Firms and Legal Practices',
                'Restaurants and Food Service',
                'General Contractors and Home Services',
                'Real Estate Agents',
                'Auto Repair and Automotive Services',
                'Gyms, Fitness Studios, and Wellness Centres',
                'Accounting and Financial Services',
                'Plumbers, Electricians, and Skilled Trades',
                'Retail Shops and Boutiques',
                'Childcare, Tutoring, and Educational Services',
                'Veterinary Clinics and Pet Services',
            ),

            'faq_heading' => 'Frequently Asked Questions: Local SEO Services',
            'faqs' => array(
                array('q' => 'What is the difference between local SEO and regular SEO?', 'a' => "Regular SEO focuses on improving your website's visibility for broad keyword searches nationally or globally. Local SEO specifically targets customers in a defined geographic area, such as your city, neighbourhood, or service region. It incorporates Google Business Profile optimisation, local citation management, location-specific keyword targeting, and review strategy, all signals that Google uses to determine which businesses to show in local and map pack results. For businesses that serve a physical area, local SEO delivers far more relevant traffic than general organic SEO alone."),
                array('q' => 'How important is Google Business Profile for local SEO?', 'a' => "It is the most important single element of your local SEO strategy. Your Google Business Profile drives your placement in the map pack, which appears prominently at the top of local search results for most service-based queries. It also generates direct phone calls, direction requests, and website visits straight from Google without the customer ever visiting your website. An unclaimed, incomplete, or poorly managed profile is the most common reason a Canadian small business is not appearing in local search results for its own category."),
                array('q' => 'How long does local SEO take to show results?', 'a' => "Google Business Profile improvements, such as completing an incomplete profile or fixing inaccurate information, can show impact within a few weeks. Broader ranking improvements in the map pack and organic local results typically take 2 to 4 months for most Canadian businesses. Markets with lower competition, including smaller cities and towns across Canada, often show faster results. Consistent ongoing optimisation, including regular profile activity and review growth, compounds local rankings over time."),
                array('q' => 'What is the local map pack and how do I get my business in it?', 'a' => "The local map pack is the block of three business listings that Google shows at the top of search results for local queries, typically accompanied by a map. It is the most visible position on the results page for local searches and captures the majority of clicks. Getting into the map pack requires a fully optimised and active Google Business Profile, accurate and consistent citations across the web, positive review volume and recency, proximity to the searcher, and on-page signals on your website that confirm your location and services. Our local SEO service addresses all of these factors."),
                array('q' => 'Can local SEO help a business that operates across multiple cities in Canada?', 'a' => "Yes, and multi-location SEO is a speciality of ours. Each city you serve needs its own dedicated location page with locally relevant content, its own keyword targeting, and ideally its own Google Business Profile if you have a physical presence there. A generic service area page listing multiple cities does not rank effectively. We build multi-location strategies that create genuine local visibility in each market you serve, whether that is three cities in Ontario or locations across multiple Canadian provinces."),
                array('q' => 'Is affordable local SEO still effective, or do I need to spend a lot?', 'a' => "Affordable local SEO is absolutely effective, particularly in smaller Canadian markets where competition is lower. The fundamentals that drive local rankings, a properly optimised Google Business Profile, accurate citations, consistent review growth, and well-structured location pages, do not require a large budget to execute. We build local SEO campaigns scaled to your market and business size so you get real results without paying for scope you do not need."),
                array('q' => 'How does AI search affect local SEO in 2026?', 'a' => "Google's AI Overviews increasingly appear for local service queries, pulling information from well-structured business websites and Google Business Profiles. Businesses with clear, authoritative, locally-relevant content are more likely to be referenced in these AI-generated answers. Review quality and volume also play a role, as AI systems use public sentiment signals. Our local SEO approach includes structured content and FAQ strategy specifically designed to capture both traditional local rankings and AI Overview visibility."),
            ),

            'cta_heading' => 'Ready to Dominate Local Search in Your Area?',
            'cta_paragraphs' => array(
                "Your local customers are searching for your services on Google right now. Whether they find you or a competitor depends on your local SEO. SEO Service Canada builds affordable, results-focused local SEO strategies for Canadian businesses across every province and city. Let us show you exactly where your local visibility stands and what it will take to improve it.",
                "Contact SEO Service Canada today for your SEO Audit.",
            ),
        ),

        // =============================================
        //  SHOPIFY SEO SERVICES
        // =============================================
        'shopify-seo-services' => array(
            'name'        => 'Shopify SEO Services',
            'accent'      => '#16a34a',
            'accent_dark' => '#15803d',

            'meta_title'       => 'Shopify SEO Services | Expert Shopify SEO Agency in Canada',
            'meta_description' => 'Need expert Shopify SEO services? SEO Service Canada helps Shopify store owners rank higher on Google, drive organic traffic, and grow sales. Get started today.',

            'hero_heading' => "Shopify SEO Services: Grow Your Store's Organic Traffic and Sales",
            'hero_paragraphs' => array(
                "Shopify is one of the world's most popular ecommerce platforms, and for good reason. It is clean, scalable, and built to sell. But Shopify does not rank itself. Out of the box, most Shopify stores leave significant organic traffic on the table because the platform comes with technical SEO limitations that store owners do not know about until they start trying to rank.",
                "Duplicate content from product variants. Collection page indexation issues. Canonical tag conflicts. App-generated scripts slowing down Core Web Vitals. These are not hypothetical problems. They are the actual issues we find on Shopify stores every week, and they are actively suppressing rankings across thousands of Canadian stores right now.",
                "SEO Service Canada provides dedicated Shopify SEO services for Canadian store owners at every stage of growth. Whether you launched your store last month or you have been running it for years without ever touching your SEO, we audit, optimise, and build a strategy that turns your Shopify store into a consistent source of organic revenue. Not just impressions. Sales.",
            ),

            'about_heading' => 'Why Shopify Stores Need Platform-Specific SEO',
            'about_paragraphs' => array(
                "Shopify is a closed platform. Unlike WordPress, you cannot edit your server configuration, modify certain canonical implementations at a code level, or override some of the URL structures the platform generates automatically. This means Shopify SEO requires a specialist who understands exactly what can be changed, what the platform constraints are, and how to build the strongest possible SEO foundation within those constraints.",
                "The most common Shopify SEO problems we encounter are duplicate product pages generated by collection and tag URLs, theme-level technical issues baked into Liquid templates, app conflicts that bloat page weight and damage Core Web Vitals, under-optimised collection pages, and missing or incorrect structured data across product listings.",
                "A generalist SEO agency that does not specialise in Shopify will often apply standard fixes that either don’t work within the platform or create new problems. Our Shopify SEO specialists understand the platform at a technical level and build strategies that work within Shopify's architecture rather than against it.",
            ),

            'services_heading' => 'Our Shopify SEO Services',
            'services_intro'   => 'Every service we deliver is built around the Shopify platform and designed to drive organic revenue for your Canadian online store.',
            'services' => array(
                array('title' => 'Shopify Technical SEO Audit', 'desc' => "We conduct a deep technical audit of your Shopify store covering crawl architecture, indexation, canonical tags, duplicate content from product variants and filtered URLs, page speed and Core Web Vitals, mobile usability, structured data implementation, internal linking, and sitemap health. Every issue is identified, explained, and prioritised by its impact on your organic rankings. You receive a clear audit report your developer can act on immediately."),
                array('title' => 'Collection and Product Page Optimisation', 'desc' => "Collection pages are the highest-value SEO pages on most Shopify stores, yet they are consistently under-optimised. We write keyword-targeted collection descriptions, optimise title tags and meta descriptions, improve internal linking from collections to products, and ensure your collection structure supports strong category-level rankings. Product pages receive individual optimisation for buying-intent keywords, including titles, descriptions, image alt tags, and schema markup for rich search results."),
                array('title' => 'Shopify Site Speed and Core Web Vitals', 'desc' => "Page speed is a direct Google ranking factor, and Shopify stores frequently suffer from bloated themes, unoptimised apps, and large image files that push load times beyond the threshold Google rewards. We audit your store's Core Web Vitals scores, identify the specific scripts, images, and app conflicts dragging down performance, and work with your development team to implement targeted improvements that improve both your rankings and your conversion rate."),
                array('title' => 'Shopify Schema and Structured Data', 'desc' => "Structured data tells Google exactly what your products, reviews, prices, and availability look like without having to interpret your HTML. Correct product schema implementation can earn rich results in Google, including star ratings, pricing, and stock availability displayed directly in the search listings. These rich snippets increase click-through rates and drive more qualified traffic. We audit and implement complete schema coverage across your Shopify store."),
                array('title' => 'Keyword Research and Content Strategy for Shopify', 'desc' => "We research the full keyword landscape for your Shopify product catalogue, mapping search terms to collection pages, product pages, and blog content. Your blog is one of Shopify's strongest SEO tools and most underused assets. A content strategy targeting buying guides, product comparisons, and informational queries in your category builds topical authority for your store and captures long-tail traffic that converts at a high rate."),
                array('title' => 'Shopify Link Building and Authority', 'desc' => "Organic rankings for competitive product categories require domain authority, and domain authority is built through quality backlinks. We develop link building campaigns for Shopify stores through digital PR, product features, industry publications, and outreach to relevant content creators and review sites. Every link we earn is legitimate, relevant, and designed to strengthen your store's long-term ranking position."),
            ),

            'choose_heading' => 'Why Shopify Store Owners Choose SEO Service Canada',
            'choose_items' => array(
                array('title' => 'Genuine Shopify Platform Expertise', 'desc' => "We understand Shopify's technical architecture, its limitations, and the specific SEO issues the platform introduces. We build strategies that work within Shopify, not against it."),
                array('title' => 'Revenue-Focused Outcomes', 'desc' => "We measure success by organic revenue growth, not just traffic or ranking positions. Every optimisation decision is made with your store's sales goals in mind."),
                array('title' => 'Canadian Market Knowledge', 'desc' => "We build keyword strategies and content for the Canadian market. Your store is optimised for how Canadian customers actually search and buy online."),
                array('title' => 'No Long-Term Contracts', 'desc' => "Shopify store owners stay with us because their organic traffic and sales improve, not because a contract leaves them no choice."),
                array('title' => 'Clear Monthly Reporting', 'desc' => "Rankings, organic sessions, and revenue attribution tracked and reported monthly in plain language. You always know exactly what your Shopify SEO investment is producing."),
            ),

            'team_heading' => 'The Shopify SEO Specialists Handling Your Campaign',
            'team' => array(
                array('name' => 'Maaz Ahmed', 'role' => 'SEO Expert', 'desc' => "Maaz brings over 6 years of SEO experience with deep specialisation in technical ecommerce SEO and Shopify-specific optimisation. He has resolved complex Shopify crawl issues, collection page indexation problems, and app-conflict performance issues for stores across multiple industries. His technical depth means the right fixes get implemented correctly, not approximated.", 'image' => 'maaz-ahmed.webp'),
                array('name' => 'Wahaj Siddiqui', 'role' => 'Head of Development', 'desc' => "Wahaj's 7 years of development experience means he speaks both SEO and Shopify Liquid fluently. He bridges the gap between SEO recommendations and practical Shopify implementation, ensuring that technical improvements are executed within the platform's constraints and actually take effect in the way that improves rankings.", 'image' => 'profile-pic.webp'),
            ),

            'process_heading' => 'Our Shopify SEO Process',
            'process_steps' => array(
                array('title' => 'Shopify Store Audit', 'desc' => "We crawl your entire Shopify store, review your current Google Search Console data, identify every technical SEO issue unique to your setup, and benchmark your rankings against your top organic competitors in Canada."),
                array('title' => 'Keyword and Architecture Strategy', 'desc' => "We map your product catalogue against search demand, identify the highest-value collection and product keywords, and plan any structural changes needed to your store's navigation and URL architecture to support those rankings."),
                array('title' => 'Technical and On-Page Implementation', 'desc' => "We fix the technical issues identified in the audit, optimise your collection and product pages, implement schema markup, improve site speed where possible, and ensure your store is structured for maximum Google visibility."),
                array('title' => 'Content and Link Building', 'desc' => "We develop a Shopify blog content strategy and build a link acquisition plan that grows your store's domain authority in your product categories over time."),
                array('title' => 'Monthly Reporting', 'desc' => "A clear monthly performance report covering keyword rankings, organic traffic, and revenue contribution from organic search. Reviewed together, with ongoing strategy refinements based on data."),
            ),

            'list_heading' => 'Shopify SEO for Every Store Size',
            'list_items' => array(
                'New Shopify stores building organic visibility from scratch',
                'Established stores with untapped organic growth potential',
                'Shopify Plus merchants scaling to national or international markets',
                'Stores migrating from another platform to Shopify',
                'Stores recovering from Google algorithm penalties or ranking drops',
                'Multi-currency and Canadian-first Shopify stores',
            ),

            'faq_heading' => 'Frequently Asked Questions: Shopify SEO Services',
            'faqs' => array(
                array('q' => 'Why is SEO harder on Shopify than other platforms?', 'a' => "Shopify generates certain URL structures and canonical tag configurations automatically that create duplicate content issues out of the box. Product pages accessed through collection URLs generate duplicate versions of the same page, which Shopify handles with canonicals but which require careful auditing to ensure they are working correctly. Liquid-based themes can introduce rendering issues, and third-party apps frequently add scripts that hurt Core Web Vitals. These are platform-specific problems that require Shopify-specific solutions."),
                array('q' => 'What are the most common SEO mistakes Shopify store owners make?', 'a' => "The most common mistakes we see are: leaving collection page descriptions blank or using manufacturer copy, not having a blog content strategy, ignoring Core Web Vitals and site speed, failing to implement product schema markup, not using canonical tags correctly for product variant URLs, and choosing themes or apps without considering their impact on page performance. Each of these represents a measurable ranking and revenue opportunity once corrected."),
                array('q' => 'How long does Shopify SEO take to show results?', 'a' => "Shopify stores with significant technical issues often see faster initial improvements once those issues are resolved, because Google can suddenly index and rank pages that were previously suppressed. Stores starting from a clean technical baseline typically see meaningful ranking and traffic improvements within 3 to 5 months. Competitive product categories in Canada may take longer. The compounding nature of SEO means results strengthen consistently month over month once the foundational work is in place."),
                array('q' => 'Can you help my Shopify store compete with large Canadian retailers?', 'a' => "Yes, and this is where a focused SEO strategy has its biggest advantage. Large retailers rank well on broad category keywords but often miss the long-tail buying-intent searches where smaller stores can win. Your Shopify store can consistently rank for specific product queries, niche category searches, and local buying intent that major retailers either do not target or cannot optimise for as precisely. We find those gaps and build your rankings there first."),
                array('q' => 'Do you offer Shopify SEO for stores just starting out?', 'a' => "Yes. Starting SEO early means building domain authority and search rankings before your competitors establish themselves. New Shopify stores benefit enormously from getting the technical foundations right from day one, avoiding the duplicate content and architecture issues that take significant effort to fix later, and starting to build organic visibility before relying exclusively on paid advertising. We offer Shopify SEO services for stores at every stage."),
                array('q' => 'What is the difference between Shopify SEO and Shopify Plus SEO?', 'a' => "Shopify Plus unlocks additional customisation options, including checkout page editing, expanded script access, and greater theme flexibility that can help resolve some of the platform-level SEO constraints present in standard Shopify. For larger stores on Shopify Plus, this means more precise technical SEO implementation is possible. Our team has experience with both standard Shopify and Shopify Plus environments and builds the right strategy for whichever version your store runs on."),
                array('q' => 'How does product schema markup help my Shopify store in Google?', 'a' => "Product schema markup is structured data code that tells Google the specific details of your products, including price, currency, availability, and review ratings. When implemented correctly, it makes your Shopify store eligible for rich results in Google, the search listings that display star ratings, price ranges, and in-stock status directly in the search results. These enhanced listings stand out visually from plain text results, drive higher click-through rates, and attract higher-intent traffic. Most Shopify stores either have incomplete schema or have it partially implemented through a theme that does not cover all required fields."),
            ),

            'cta_heading' => 'Ready to Turn Your Shopify Store Into an Organic Sales Machine?',
            'cta_paragraphs' => array(
                "Your Shopify store has more organic potential than your current rankings suggest. The technical issues, under-optimised collection pages, and missing content that are holding you back are fixable. SEO Service Canada specialises in Shopify SEO for Canadian store owners who want to reduce their reliance on paid ads and build a compounding organic channel that grows their revenue month over month.",
                "Contact SEO Service Canada today for your SEO Audit.",
            ),
        ),

        // =============================================
        //  SEO CONSULTING SERVICES
        // =============================================
        'seo-consulting-services' => array(
            'name'        => 'SEO Consulting Services',
            'accent'      => '#302e9d',
            'accent_dark' => '#1e1b4b',

            'meta_title'       => 'SEO Consulting Services | Expert SEO Consultants in Canada',
            'meta_description' => 'Need expert SEO consulting services? SEO Service Canada provides professional SEO consultant services for Canadian businesses. Get a clear strategy that works.',

            'hero_heading' => 'SEO Consulting Services: Get a Clear Strategy From an Expert Who Knows Canadian Search',
            'hero_paragraphs' => array(
                "Most business owners know they need SEO. The problem is not motivation. It is clarity. Where do you start? What actually moves your rankings? Which advice from which article applies to your business, your website, and your market?",
                "That is exactly what SEO consulting solves. A qualified SEO consultant sits down with your business, looks at your actual website and competitive landscape, and gives you a strategy that is specific to your situation. Not generic best practices. A real plan, built for your goals.",
                "SEO Service Canada provides professional SEO consulting services for Canadian businesses at every stage of growth. Whether you are just starting to think about SEO, trying to understand why your rankings dropped, or looking to build a long-term search strategy, our SEO consultants deliver honest, actionable advice you can act on immediately.",
            ),

            'about_heading' => 'What Is SEO Consulting and Who Is It For?',
            'about_paragraphs' => array(
                "SEO consulting is the process of working with an experienced SEO specialist to assess your current search performance, identify what is limiting your visibility, and develop a prioritised strategy to improve it. Unlike ongoing SEO management, consulting is often more focused. It is about direction and expertise.",
                "You might need SEO consulting services if you have an in-house team that handles execution but lacks strategic direction. Or if your rankings dropped unexpectedly and you need an expert to diagnose why. Or if you are planning a website redesign or migration and want to ensure you do not accidentally destroy your existing rankings in the process.",
                "Professional SEO consulting is also valuable for business owners who want to understand what their current agency is actually doing and whether the strategy makes sense. Regardless of where you are starting from, an SEO consultation gives you a clear, honest picture of your search performance and a practical path forward.",
            ),

            'services_heading' => 'What Our SEO Consulting Services Cover',
            'services_intro'   => 'Every consulting engagement is tailored to your business. Here is what we typically work through together:',
            'services' => array(
                array('title' => 'SEO Audit and Situation Analysis', 'desc' => "We start by reviewing your current website performance, keyword rankings, organic traffic trends, and the technical health of your site. This gives us an honest baseline. We can see clearly what is working, what is not, and what your competitors are doing that you are not. The audit covers on-page issues, technical SEO, content gaps, and your backlink profile."),
                array('title' => 'Keyword and Market Strategy', 'desc' => "We identify the specific keywords your Canadian customers are using at every stage of their search journey. We look at search volume, competition, and intent so every keyword recommendation is grounded in real data. You get a prioritised keyword map that tells you exactly which terms to target, on which pages, and in what order to build momentum."),
                array('title' => 'Competitor Gap Analysis', 'desc' => "We analyse the businesses ranking above you and identify the exact factors giving them an advantage. Content depth, backlink quality, technical structure, keyword targeting. Understanding the gap is the first step to closing it. You get a clear comparison of where your site stands relative to your top competitors and what it will specifically take to move past them."),
                array('title' => 'Content Strategy and Recommendations', 'desc' => "Content drives rankings. We assess your existing content for quality, relevance, and search alignment, then build a content roadmap that targets gaps in your current coverage. We identify which pages need to be created, which need to be improved, and which blog or resource content will build your topical authority most efficiently."),
                array('title' => 'Technical SEO Recommendations', 'desc' => "We review your site for technical issues affecting crawlability, indexation, page speed, mobile performance, and Core Web Vitals. Every finding is explained in plain language with a clear recommendation attached. If your developer needs to action it, we frame the output so they understand both what to do and why it matters for your Google performance."),
                array('title' => 'Ongoing SEO Consulting', 'desc' => "Some businesses need one-off strategic clarity. Others benefit from regular consulting sessions as their business grows, their site evolves, and the search landscape changes. We offer flexible ongoing consulting arrangements for Canadian businesses that want a trusted SEO adviser without the overhead of a full managed campaign."),
            ),

            'choose_heading' => 'Why Work with SEO Service Canada as Your SEO Consultant?',
            'choose_items' => array(
                array('title' => 'Straightforward, Honest Advice', 'desc' => "We tell you what your SEO situation actually looks like and what it will genuinely take to improve it. No inflated promises, no jargon designed to impress rather than inform."),
                array('title' => 'Canadian Market Knowledge', 'desc' => "We understand how Canadian businesses compete in Google. The search behaviour, the competitive dynamics across provinces and cities, and the specific ranking factors that matter most in the Canadian market."),
                array('title' => 'Actionable Deliverables', 'desc' => "Every consulting engagement produces clear, practical recommendations your team can implement. Not vague advice. Specific actions with explanations of why they matter."),
                array('title' => 'No Long-Term Commitment Required', 'desc' => "SEO consulting can start with a single engagement. You get expert input when you need it, structured as a one-off project or an ongoing relationship, whichever fits your situation."),
                array('title' => 'Dedicated Expert on Your Account', 'desc' => "You work directly with an experienced SEO consultant who understands your business, not a rotating team of junior staff following a template."),
            ),

            'team_heading' => 'Your SEO Consulting Team',
            'team' => array(
                array('name' => 'Tauqeer Ahmed', 'role' => 'Leading SEO Specialist', 'desc' => "Tauqeer brings extensive strategic SEO experience across Canadian markets. His consulting work focuses on giving businesses a clear, realistic picture of their search situation and a practical strategy for improving it. He works well with both in-house teams that need strategic direction and business owners who are managing SEO themselves for the first time.", 'image' => 'tauqeer-bhai-image.webp'),
                array('name' => 'Maaz Ahmed', 'role' => 'SEO Expert', 'desc' => "Maaz contributes deep technical and analytical expertise to consulting engagements. When clients need a thorough audit, a complex technical diagnosis, or a detailed competitor gap analysis, Maaz brings the analytical depth that produces recommendations you can actually trust and act on.", 'image' => 'maaz-ahmed.webp'),
            ),

            'process_heading' => 'How a Typical SEO Consulting Engagement Works',
            'process_steps' => array(
                array('title' => 'Initial Discovery Call', 'desc' => "We start with a conversation about your business, your goals, your current marketing situation, and the specific SEO challenges you are facing. This shapes the scope of the engagement."),
                array('title' => 'Audit and Analysis', 'desc' => "We conduct a thorough review of your website, rankings, content, backlinks, and competitors. This takes us from conversation to real data."),
                array('title' => 'Strategy Session', 'desc' => "We walk through our findings and recommendations together. You ask questions. We explain the reasoning behind every recommendation so you understand not just what to do but why it matters."),
                array('title' => 'Deliverables and Roadmap', 'desc' => "You receive a written strategy document covering the prioritised recommendations and a roadmap for implementing them, whether you act on it yourself, with your team, or with our ongoing support."),
                array('title' => 'Optional Ongoing Consulting', 'desc' => "For businesses that want continued guidance, we offer regular consulting sessions to review progress, adjust strategy based on new data, and stay ahead of changes in Google's ranking factors."),
            ),

            'list_heading' => 'Who Our SEO Consulting Services Are Built For',
            'list_items' => array(
                'Business owners managing their own website who want expert direction',
                'In-house marketing teams that need a strategic SEO framework',
                'Companies planning a website redesign or platform migration',
                'Businesses whose rankings have dropped and need a diagnosis',
                'Startups building their SEO strategy from scratch',
                "Established businesses auditing their current agency's work",
                'Multi-location Canadian businesses needing province or city-level strategy',
            ),

            'faq_heading' => 'Frequently Asked Questions: SEO Consulting Services',
            'faqs' => array(
                array('q' => 'What is the difference between SEO consulting and SEO management?', 'a' => "SEO management is a hands-on, ongoing service where the agency executes your SEO strategy month to month, including writing content, building links, and implementing technical fixes. SEO consulting is more focused on strategy, diagnosis, and direction. A consultant analyses your situation, builds the plan, and advises on execution, but the implementation may be handled by your internal team. Many Canadian businesses use consulting to build a strategy they then manage in-house, or to audit and redirect an existing managed campaign."),
                array('q' => 'How do I know if I need an SEO consultant or a full-service agency?', 'a' => "If you have the internal capacity to implement SEO recommendations but lack the strategic expertise to know what to prioritise, consulting is often the right fit. It is also appropriate when you need a specific problem diagnosed, such as a traffic drop, a migration risk, or a penalty recovery. A full-service SEO agency makes more sense when you want the strategy and the execution handled externally as an ongoing service. We offer both, and we can help you decide which fits your current situation during an initial discovery call."),
                array('q' => 'How long does an SEO consulting engagement take?', 'a' => "A one-off SEO consultation, including an audit and strategy session, typically takes one to two weeks from start to delivery. Ongoing consulting relationships are structured around your needs, whether that is monthly strategy calls, quarterly reviews, or ad hoc sessions when specific questions arise. We build the engagement structure around what actually makes sense for your business, not a fixed template."),
                array('q' => 'Can an SEO consultant help if my rankings dropped suddenly?', 'a' => "Yes. A ranking drop is one of the most common reasons businesses seek SEO consulting. Our diagnostic process identifies whether the drop was caused by a Google algorithm update, a technical issue introduced during a site change, a penalty from problematic backlinks, or a competitive shift in your market. Once the cause is understood, the recovery strategy becomes clear. Many businesses waste months trying random fixes without isolating the actual cause of a drop. An SEO consultant finds it faster."),
                array('q' => 'Do you offer SEO consulting for businesses that already have an agency?', 'a' => "Yes. A second opinion from an independent SEO consultant is genuinely valuable if you are unsure whether your current strategy is sound or whether the results you are seeing are reasonable for your market and timeline. We review what your current agency is doing, assess whether the approach is aligned with best practices, and give you an honest assessment. This is not about undermining another agency. It is about giving you the information you need to make a good decision about your investment."),
                array('q' => 'Is SEO consulting worth it for a small Canadian business?', 'a' => "For many small businesses, a focused SEO consultation delivers more value than months of trial-and-error self-managed SEO. A good consultant identifies the two or three changes that will have the most impact for your specific site and tells you what to stop spending time on. That clarity alone saves time and reduces wasted effort significantly. Professional SEO consulting services do not have to be expensive to be valuable. We work with small Canadian businesses and structure consulting engagements that deliver real direction at a scale that makes sense."),
            ),

            'cta_heading' => "Not Sure Where to Start With SEO? Let's Talk.",
            'cta_paragraphs' => array(
                "One conversation with an SEO consultant can save you months of guesswork. SEO Service Canada provides straightforward, expert SEO consulting services for Canadian businesses that want a clear strategy and honest advice. We will review your current situation and tell you exactly what your search performance looks like and what it will take to improve it.",
                "Contact SEO Service Canada today for your SEO Audit.",
            ),
        ),

        // =============================================
        //  DENTAL SEO SERVICES
        // =============================================
        'dental-seo-services' => array(
            'name'        => 'Dental SEO Services',
            'accent'      => '#0891b2',
            'accent_dark' => '#0e7490',

            'meta_title'       => 'Dental SEO Services | SEO for Dental Practices in Canada',
            'meta_description' => 'Looking for dental SEO services that bring in new patients? SEO Service Canada helps dental practices rank on Google and grow appointment bookings. Get started.',

            'hero_heading' => 'Dental SEO Services: Rank Higher on Google and Book More Patients',
            'hero_paragraphs' => array(
                "When someone needs a dentist, they do not ask around much anymore. They open Google, type a quick search, and pick from the first few results they see. If your dental practice is not in those results, that patient is booking with someone else.",
                "This happens hundreds of times a month in your area. Every search for \"dentist near me,\" \"dental clinic in [your city],\" or \"teeth whitening [your neighbourhood]\" is a potential new patient. The practices that show up consistently in those results grow. The ones that do not remain dependent on referrals and hope.",
                "SEO Service Canada provides professional dental SEO services for Canadian dental practices. We understand the trust-driven nature of dental search, the local intent behind patient queries, and what Google looks for when ranking healthcare businesses. Our dental SEO strategies are built to increase your visibility, bring in new patients, and fill your appointment calendar with qualified bookings.",
            ),

            'about_heading' => 'Why Dental Practices Need a Different SEO Approach',
            'about_paragraphs' => array(
                "Dental SEO is not the same as general business SEO. Patients searching for a dentist are not casually browsing. They have a specific need, a specific location in mind, and they make decisions quickly based on what they see on that first page of results.",
                "Trust signals matter enormously. A dental practice that shows up with a complete Google Business Profile, strong reviews, and a website that clearly explains its services and location will consistently outperform a competitor with better rankings but a weaker trust presence. Google knows this too. Its ranking algorithm for healthcare-related searches weighs credibility, local signals, and content quality more heavily than in many other industries.",
                "There is also the competition factor. Most cities across Canada have multiple dental practices competing for the same patient searches. The practices that invest in proper dental SEO, not just a basic website, are the ones that own the map pack and top organic positions. Our dental SEO marketing services are built to put your practice there and keep it there.",
            ),

            'services_heading' => 'Our Dental SEO Services',
            'services_intro'   => 'Every dental SEO campaign we run is custom-built for your practice, your location, and the patients you want to attract.',
            'services' => array(
                array('title' => 'Google Business Profile Optimisation for Dentists', 'desc' => "Your Google Business Profile is the most visible part of your dental practice's online presence. It determines whether you appear in the local map pack when patients search for a dentist in your area. We fully optimize your profile, including your primary and secondary categories, service listings, practice description, photo strategy, and review management approach. A well-managed profile is often the single most impactful step a dental practice can take toward better local visibility."),
                array('title' => 'Local SEO for Dental Clinics', 'desc' => "We build location-specific keyword strategies targeting the exact searches your patients make. Searches like \"family dentist in Mississauga\" or \"emergency dental clinic Ottawa\" are high-intent queries with patients ready to book. We optimize your location pages, build accurate citations across Canadian health directories, and ensure your practice shows up in every relevant local search across your service area."),
                array('title' => 'Dental Service Page Optimisation', 'desc' => "Each dental service you offer deserves its own optimised page. General dentistry, cosmetic dentistry, dental implants, teeth whitening, orthodontics, emergency dental care. Patients search for specific treatments, not just \"dentist.\" We build and optimize individual service pages that rank for procedure-specific keywords, answer patient questions, and make it easy to book an appointment directly from the page."),
                array('title' => 'Content Marketing for Dental Practices', 'desc' => "Educational content builds trust before a patient ever calls your practice. Blog posts that answer common patient questions about procedures, costs, what to expect, and how to choose a dentist establish your practice as a credible, approachable authority. This content ranks for long-tail searches and brings in patients who are in the research phase, turning them into booked appointments over time."),
                array('title' => 'Technical SEO for Dental Websites', 'desc' => "A slow or poorly structured dental website loses patients before they read a single line of content. We audit your practice website for page speed, mobile performance, crawl issues, and structured data. Dental schema markup, including MedicalBusiness and LocalBusiness structured data, helps Google understand your practice and can improve how your listing appears in search results."),
                array('title' => 'Review Strategy and Reputation Management', 'desc' => "Patient reviews are both a ranking factor and a conversion factor for dental practices. Volume, recency, and quality of reviews directly influence your map pack position and how likely a searching patient is to click through and call. We build a sustainable review acquisition strategy that grows your review count consistently over time without violating Google's guidelines."),
            ),

            'choose_heading' => 'Why Canadian Dental Practices Choose SEO Service Canada',
            'choose_items' => array(
                array('title' => 'Patient Acquisition Focus', 'desc' => "We measure dental SEO success by new patient inquiries and appointment bookings, not just ranking positions. Every strategy decision is connected to your practice growth goals."),
                array('title' => 'Healthcare Search Expertise', 'desc' => "We understand Google's EEAT framework and how it applies to dental and healthcare content. Our approach builds the trust signals Google requires to rank medical and dental practices prominently."),
                array('title' => 'Canadian Market Knowledge', 'desc' => "We know the competitive dental SEO landscape across Canadian cities and provinces. Whether you are in Toronto, Calgary, Halifax, or a smaller community, we build a strategy calibrated to your specific market."),
                array('title' => 'No Long-Term Contracts', 'desc' => "Dental practices stay with us because their patient inquiries increase. There is no contract forcing them to remain."),
                array('title' => 'Transparent Reporting', 'desc' => "Monthly reports showing your local rankings, Google Business Profile performance, and organic traffic. You always know what your dental SEO investment is producing."),
            ),

            'team_heading' => 'The Team Behind Your Dental SEO Campaign',
            'team' => array(
                array('name' => 'Hassan Abid', 'role' => 'SEO Specialist', 'desc' => "Hassan brings strong expertise in local SEO and organic growth strategy for service-based businesses. His experience with healthcare and dental clients means he understands both the competitive dynamics of dental search and the specific trust signals that help practices rank and convert patients.", 'image' => 'hassan-bhai.webp'),
                array('name' => 'Nooruddin Farishta', 'role' => 'Head of Marketing and Sales Canada', 'desc' => "Nooruddin oversees campaign strategy and client growth with deep experience across Canadian markets. For dental practices, he ensures the SEO strategy is aligned with real practice growth objectives, not just digital metrics.", 'image' => 'nooruddin-farishta.jpeg'),
            ),

            'process_heading' => 'Our Dental SEO Process',
            'process_steps' => array(
                array('title' => 'Practice and Market Audit', 'desc' => "We assess your current local rankings, Google Business Profile health, website performance, and how your practice compares to competitors in your area. You get a clear picture of where you stand and where the gaps are."),
                array('title' => 'Dental Keyword Research', 'desc' => "We identify the searches your patients make at every stage of their decision, from initial awareness to ready-to-book, and map those keywords to the right pages on your website."),
                array('title' => 'Profile and On-Page Optimisation', 'desc' => "We fully optimise your Google Business Profile and make targeted improvements to your website's service pages, location content, and meta data."),
                array('title' => 'Content and Authority Building', 'desc' => "We develop patient-focused content that builds trust and ranks for treatment and location searches, alongside a review strategy and citation work that strengthen your local authority."),
                array('title' => 'Monthly Reporting', 'desc' => "A clear report every month covering your local rankings, profile interactions, and organic traffic growth. Reviewed together with strategy adjustments as your practice grows."),
            ),

            'list_heading' => 'Dental Services We Help Rank',
            'list_items' => array(
                'General and Family Dentistry',
                'Cosmetic Dentistry and Teeth Whitening',
                'Dental Implants',
                'Orthodontics and Invisalign',
                'Emergency Dental Care',
                'Pediatric Dentistry',
                'Periodontics and Gum Treatment',
                'Dental Veneers and Crowns',
                'Root Canal Treatment',
                'Dentures and Restorative Dentistry',
            ),

            'faq_heading' => 'Frequently Asked Questions: Dental SEO Services',
            'faqs' => array(
                array('q' => 'How does SEO help a dental practice get more patients?', 'a' => "Dental SEO improves your practice's visibility in Google search results for the queries patients use when looking for a dentist in your area. Better visibility means more clicks to your website and more calls directly from your Google Business Profile. Because dental searches are local and high-intent, patients who find your practice through Google are already looking for the services you offer in your location. They are significantly more likely to book than cold traffic from other marketing channels."),
                array('q' => 'What is the most important SEO factor for a dental practice?', 'a' => "Your Google Business Profile is the single most important local SEO asset for a dental practice. It powers your placement in the map pack, which is the most visible position on the search results page for local dental queries. A fully optimised and actively managed profile with strong reviews, correct categories, and complete service information consistently outranks practices with better websites but neglected profiles. After the profile, individual service pages and consistent patient reviews are the next highest-impact priorities."),
                array('q' => 'How long does dental SEO take to show results?', 'a' => "Most dental practices see meaningful improvements in their Google Business Profile visibility and local keyword rankings within 2 to 4 months of starting a focused dental SEO campaign. Less competitive dental markets in smaller Canadian cities can show results faster. Organic website rankings for specific treatment terms typically take 3 to 6 months to develop. The foundation work, including profile optimisation and citation cleanup, often produces quicker local visibility improvements than content-driven organic rankings."),
                array('q' => 'Do I need separate pages for each dental service I offer?', 'a' => "Yes. Patients searching for specific dental treatments use specific search terms. Someone looking for Invisalign in Calgary is not typing \"dentist Calgary.\" They are typing \"Invisalign Calgary\" or \"clear aligners Calgary.\" A dedicated, well-optimised page for each service you offer allows your practice to rank for those specific treatment searches, dramatically expanding the number of relevant patient queries your website can capture."),
                array('q' => 'How important are Google reviews for dental SEO?', 'a' => "Extremely important, in two distinct ways. First, review volume and recency are direct ranking factors in Google's local algorithm. Practices with more recent positive reviews consistently rank higher in the map pack. Second, reviews are a powerful conversion factor. A patient choosing between two dental practices they found on Google will almost always choose the one with more and better reviews. Growing your review count consistently is one of the most impactful ongoing activities in any dental SEO campaign."),
                array('q' => 'Can dental SEO work for a brand new practice?', 'a' => "Yes. A new dental practice with no existing online presence benefits enormously from starting SEO correctly from day one. Setting up a fully optimised Google Business Profile, building accurate citations, creating properly structured service pages, and developing a review strategy from the moment you open puts you in a far stronger local search position than practices that wait months or years before addressing their SEO. In markets with older competitors who have neglected their digital presence, a well-structured new practice can outrank them within months."),
            ),

            'cta_heading' => 'More Patients Start With a Google Search. Make Sure They Find You.',
            'cta_paragraphs' => array(
                "Every month your practice is not visible in local dental searches is another month of potential new patients booking with a competitor. SEO Service Canada builds dental SEO campaigns that improve your Google visibility, strengthen your patient trust signals, and fill your appointment calendar with qualified bookings.",
                "Contact SEO Service Canada today for your SEO Audit.",
            ),
        ),

        // =============================================
        //  ON-PAGE SEO SERVICES
        // =============================================
        'on-page-seo-services' => array(
            'name'        => 'On-Page SEO Services',
            'accent'      => '#bf2021',
            'accent_dark' => '#7f1d1d',

            'meta_title'       => 'On-Page SEO Services | Expert On-Page Optimization in Canada',
            'meta_description' => 'Need professional on-page SEO services? SEO Service Canada optimizes every element of your pages to rank higher on Google and convert more visitors. Get started.',

            'hero_heading' => 'On-Page SEO Services: Optimize Every Page. Rank for the Right Terms. Convert Better.',
            'hero_paragraphs' => array(
                "Getting traffic to your website is one thing. Getting the right traffic, from the right search terms, to pages that are structured to convert, is something else entirely. That is what on-page SEO does.",
                "On-page SEO is the work done directly on your website to improve how Google reads, understands, and ranks your individual pages. It covers your titles, headings, content, internal links, images, meta data, and the structure of every URL. When it is done properly, each page on your site becomes a targeted, optimised asset that works for your business 24 hours a day.",
                "SEO Service Canada provides professional on-page SEO services for Canadian businesses across every industry. Whether your site has never been properly optimised or you have been trying to manage it yourself without a clear system, we audit every page and implement the changes that make a measurable difference to your Google rankings and your user experience.",
            ),

            'about_heading' => 'What On-Page SEO Actually Includes',
            'about_paragraphs' => array(
                "On-page SEO is often misunderstood as just adding keywords to your content. In reality it covers every element of a webpage that Google evaluates when deciding whether to rank it and how prominently to show it.",
                "Done well, on-page SEO aligns what your page says, how it is structured, and what signals it sends to Google with the specific intent of the search queries you want to rank for. Done poorly or ignored completely, even a website with good content and strong backlinks underperforms its potential.",
                "A properly optimised page satisfies three things at once: it tells Google exactly what the page is about, it matches the intent of the searcher who lands on it, and it is structured clearly enough that the visitor can find what they came for and take the next step. That is the standard our on-page SEO services are built to meet.",
            ),

            'services_heading' => 'Our On-Page SEO Services',
            'services_intro'   => 'We cover every on-page element that influences your rankings and your conversion rate. Here is what the work involves:',
            'services' => array(
                array('title' => 'Title Tag Optimisation', 'desc' => "Your title tag is the headline that appears in Google search results. It is one of the strongest on-page ranking signals and directly influences your click-through rate. We write title tags that include your primary keyword naturally, communicate a clear benefit or topic, and stay within the character limits Google displays. A well-written title tag improves both your ranking potential and the number of people who choose to click your result over a competitor's."),
                array('title' => 'Meta Description Optimisation', 'desc' => "Meta descriptions do not directly affect your ranking, but they significantly affect how many people click your result. A compelling, relevant meta description tells the searcher exactly what they will find on your page and why it is worth their click. We write meta descriptions that match search intent, include relevant keywords naturally, and are concise enough to display fully in Google without being cut off."),
                array('title' => 'Heading Structure (H1, H2, H3)', 'desc' => "Your heading structure is how Google parses the hierarchy and topic coverage of your page. An H1 that does not include your primary keyword is a missed ranking signal. H2s and H3s that are vague or repetitive fail to reinforce topical coverage. We audit and rewrite your heading structure so it is both logical for the reader and informative for Google, covering the range of subtopics that comprehensive, well-ranking pages address."),
                array('title' => 'Keyword Placement and Content Optimisation', 'desc' => "Keyword optimization is not about hitting a density percentage. It is about placing your primary and secondary keywords where Google looks for them, including your H1, opening paragraph, and at least one H2, while writing content that covers the topic thoroughly and naturally. We review your existing content for keyword alignment, thin sections, missing subtopics, and readability issues, and we recommend specific improvements that improve both rankings and time on page."),
                array('title' => 'Internal Linking Strategy', 'desc' => "Every internal link on your website is a signal that distributes authority and guides both users and Google through your content. Poorly planned internal linking means some of your most important pages receive no authority from the rest of your site. We audit your internal link structure and build a strategic linking plan that funnels page authority toward your highest-priority ranking pages and creates a logical browsing path for visitors."),
                array('title' => 'Image Optimisation and Alt Text', 'desc' => "Images that are not optimised slow your page down and miss a secondary ranking opportunity. We review your image file sizes, compression, and formats for performance impact, and we audit all image alt text for keyword relevance and descriptive accuracy. Properly optimised images contribute to faster page speeds, better accessibility, and incremental keyword signals that compound across a full page audit."),
                array('title' => 'URL Structure Optimisation', 'desc' => "Clean, keyword-relevant URLs are a minor but consistent ranking signal. Long, dynamic, or keyword-free URLs also reduce click-through rates because they look less trustworthy in search results. We audit your URL structure for unnecessary parameters, missed keyword opportunities, and inconsistencies that could cause indexation confusion, and provide clear recommendations for improvement."),
                array('title' => 'Schema Markup and Structured Data', 'desc' => "Structured data tells Google specific things about your page content that cannot be inferred from text alone. FAQ schema, review schema, service schema, and local business schema are all on-page elements that make pages eligible for rich results in Google. We audit your current schema implementation and recommend additions that improve your search result appearance and support visibility in Google's AI Overviews and featured snippets."),
            ),

            'choose_heading' => 'Why On-Page SEO Matters More Than Most Businesses Realise',
            'choose_items' => array(
                array('title' => 'It is the Foundation Everything Else Builds On', 'desc' => "Backlinks and technical SEO work much better when your on-page signals are aligned. A page that Google cannot read clearly will not rank well regardless of how many links point to it."),
                array('title' => 'It Directly Affects Conversion Rate', 'desc' => "On-page SEO is not just for rankings. Clear headings, well-structured content, and logically placed internal links help visitors find what they need and take action. Better structure converts more of the traffic you already have."),
                array('title' => 'It Supports AI Search Visibility', 'desc' => "Google's AI Overviews and featured snippets pull from pages with clear, well-structured, on-page content. FAQ schema and properly formatted answers increase your chances of being cited in AI-generated search results."),
                array('title' => 'It is Controllable', 'desc' => "Unlike backlinks or domain authority, on-page SEO is entirely within your control. Every improvement we recommend can be implemented on your own website without waiting for external factors to change."),
            ),

            'team_heading' => 'The Team Handling Your On-Page SEO',
            'team' => array(
                array('name' => 'Maaz Ahmed', 'role' => 'SEO Expert', 'desc' => "Maaz brings over 6 years of hands-on SEO experience with a strong focus on on-page analysis and technical content optimisation. He has audited and improved on-page SEO across hundreds of Canadian business websites, from single-page service businesses to large content-heavy sites with thousands of URLs.", 'image' => 'maaz-ahmed.webp'),
                array('name' => 'Hassan Abid', 'role' => 'SEO Specialist', 'desc' => "Hassan's expertise in organic growth strategy means he approaches on-page optimisation with conversion in mind, not just rankings. He understands how on-page changes influence not only where pages rank but how visitors engage with them once they arrive.", 'image' => 'hassan-bhai.webp'),
            ),

            'process_heading' => 'Our On-Page SEO Process',
            'process_steps' => array(
                array('title' => 'Full On-Page Audit', 'desc' => "We crawl your website and audit every page for on-page SEO issues. Title tags, meta descriptions, heading structure, keyword alignment, internal links, image optimisation, schema, and content quality are all assessed and scored."),
                array('title' => 'Priority Ranking', 'desc' => "Not every page matters equally. We prioritise the pages with the most traffic potential, the most commercial value, or the most urgent on-page problems, so improvements deliver the fastest and strongest impact."),
                array('title' => 'Implementation', 'desc' => "We make the on-page changes directly or provide a precise implementation guide for your developer or content team. Every change is documented with the before state, the after state, and the reason it improves your SEO."),
                array('title' => 'Content Recommendations', 'desc' => "Where existing content needs to be expanded, restructured, or supplemented with supporting pages, we provide specific content briefs that give your writer or our content team everything needed to produce pages that rank."),
                array('title' => 'Review and Reporting', 'desc' => "After implementation, we track the ranking impact of on-page changes and report on improvements. On-page SEO often produces faster visible ranking movement than off-page work, and we document that progress clearly."),
            ),

            'faq_heading' => 'Frequently Asked Questions: On-Page SEO Services',
            'faqs' => array(
                array('q' => 'What is on-page SEO and why does it matter?', 'a' => "On-page SEO refers to all the optimization work done directly on your website pages to improve their ranking in Google. It includes title tags, meta descriptions, heading structure, keyword placement, content quality, internal links, image optimisation, URL structure, and schema markup. It matters because Google uses these elements to understand what each page is about, decide which searches it is relevant for, and determine how confidently to rank it. Pages without proper on-page optimisation underperform their potential regardless of how good the rest of their SEO is."),
                array('q' => 'How is on-page SEO different from technical SEO?', 'a' => "On-page SEO focuses on the content and structure of individual pages: titles, headings, keywords, internal links, and schema. Technical SEO focuses on site-wide infrastructure: crawlability, indexation, page speed, Core Web Vitals, security, and how Google accesses and processes your site. Both are essential. A technically healthy website with poor on-page SEO will not rank well for its target terms. A perfectly optimised page on a technically broken site cannot be found or ranked properly by Google. Our services address both."),
                array('q' => 'How long does on-page SEO take to show results?', 'a' => "On-page SEO often produces ranking movement faster than off-page work because it directly improves signals Google already evaluates on your existing pages. Many Canadian businesses see measurable ranking improvements within 4 to 8 weeks of implementing thorough on-page changes. Results depend on how competitive your target keywords are, how significant the on-page issues were before optimisation, and how quickly changes are implemented after our audit."),
                array('q' => 'Can you do on-page SEO without rewriting all my content?', 'a' => "Yes. Many on-page improvements do not require full content rewrites. Title tags, meta descriptions, heading structure, internal links, image alt text, and schema markup can all be improved without touching your existing content body. Where content does need updating, we are specific about which sections and what changes will make the biggest difference, rather than recommending a full rewrite for every page."),
                array('q' => 'What is schema markup and does my website need it?', 'a' => "Schema markup is structured data added to your pages that helps Google understand specific details about your content, such as your business type, services, reviews, FAQs, and pricing. It makes your pages eligible for rich results in Google, which are enhanced search listings that display additional information like star ratings and FAQ answers directly in the search results. Most Canadian business websites are missing schema markup entirely or have it partially implemented. It is one of the higher-impact on-page improvements available for businesses that have not yet addressed it."),
                array('q' => 'Is on-page SEO a one-time fix or an ongoing activity?', 'a' => "Both, depending on your situation. An initial on-page audit and implementation fixes the existing issues across your site. But on-page SEO also benefits from regular review as you add new pages, publish new content, and as Google's guidelines evolve. For growing Canadian businesses, we recommend treating on-page SEO as an ongoing activity tied to your content production, ensuring every new page is optimised from day one rather than needing to be fixed later."),
            ),

            'cta_heading' => 'Every Page on Your Site Could Be Working Harder.',
            'cta_paragraphs' => array(
                "Most Canadian business websites have untapped ranking potential sitting in their existing pages. Better title tags, clearer heading structure, smarter internal links, and properly implemented schema can move rankings that have been stuck for months. SEO Service Canada conducts thorough on-page SEO audits and implements every improvement with clear documentation of what changed and why it matters for your search performance.",
                "Contact SEO Service Canada today for your SEO Audit.",
            ),
        ),

        // END_SERVICES
    );

    return isset($services[$key]) ? $services[$key] : false;
}

/**
 * Resolve service page data for the current page (by slug), if any.
 *
 * @return array|false
 */
function ssc_current_service_page_data() {
    if (!is_page()) {
        return false;
    }
    $slug = get_post_field('post_name', get_queried_object_id());
    if (!$slug) {
        return false;
    }
    return ssc_get_service_page_data($slug);
}

/**
 * Use the exact Meta Title for service pages.
 */
add_filter('pre_get_document_title', function ($title) {
    $data = ssc_current_service_page_data();
    if ($data && !empty($data['meta_title'])) {
        return $data['meta_title'];
    }
    return $title;
}, 20);

/**
 * Feed the exact Meta Title / Description to Rank Math when it is active.
 */
add_filter('rank_math/frontend/title', function ($title) {
    $data = ssc_current_service_page_data();
    if ($data && !empty($data['meta_title'])) {
        return $data['meta_title'];
    }
    return $title;
});

add_filter('rank_math/frontend/description', function ($description) {
    $data = ssc_current_service_page_data();
    if ($data && !empty($data['meta_description'])) {
        return $data['meta_description'];
    }
    return $description;
});

/**
 * Feed the exact Meta Title / Description to Yoast SEO when it is active.
 */
add_filter('wpseo_title', function ($title) {
    $data = ssc_current_service_page_data();
    if ($data && !empty($data['meta_title'])) {
        return $data['meta_title'];
    }
    return $title;
});

add_filter('wpseo_metadesc', function ($description) {
    $data = ssc_current_service_page_data();
    if ($data && !empty($data['meta_description'])) {
        return $data['meta_description'];
    }
    return $description;
});

/**
 * Output the exact Meta Description for service pages
 * (skipped automatically if an SEO plugin is active).
 */
add_action('wp_head', function () {
    if (defined('WPSEO_VERSION') || defined('RANK_MATH_VERSION') || class_exists('RankMath')) {
        return;
    }
    $data = ssc_current_service_page_data();
    if ($data && !empty($data['meta_description'])) {
        echo '<meta name="description" content="' . esc_attr($data['meta_description']) . '">' . "\n";
    }
}, 1);
