<?php
/**
 * Province SEO Page Data
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

function ssc_get_province_data($key) {
    $provinces = array(

        'ontario' => array(
            'name' => 'Ontario',
            'layout' => 'a',
            'accent' => '#302e9d',
            'meta_description' => 'Looking for expert SEO services in Ontario? SEO Service Canada helps Ontario businesses rank higher on Google and drive real results. Get a free audit today.',

            'hero_intro' => 'Ontario is Canada\'s most populated province and its economic engine. The competition for local customers is fierce, from the busy commercial districts of Toronto and Ottawa to the growing business communities in Hamilton, London, and Kitchener. Every day, thousands of Ontario consumers search Google for the exact products and services your business offers.
If your website is not showing up on the first page, you are handing those customers to your competitors. SEO Service Canada helps Ontario businesses of all sizes earn higher Google rankings, attract more qualified visitors, and turn online searches into real revenue. We build a custom strategy around your goals, your city, and your industry.',
            'hero_cta' => 'Get Your Free Ontario SEO Audit',

            'why_title' => 'Why SEO Matters for Ontario Businesses',
            'why_paragraphs' => array(
                'Ontario consumers rely on Google to find local businesses. Google dominates search traffic across Canada, and the first page of results captures the vast majority of clicks. Businesses sitting on page two or beyond rarely see meaningful traffic.',
                'Mobile search has accelerated this shift. A large portion of local searches happen on smartphones, often with clear buying intent. Search phrases like \'near me\' or \'open now\' signal that the person is ready to act. If your business is not visible in those moments, you lose the sale before you ever had a chance.',
                'The cost of poor rankings is not just lost traffic. It is lost revenue, month after month. A strong SEO presence in Ontario means your business works around the clock, bringing in leads even while you sleep.',
            ),

            'services_title' => 'Our SEO Services in Ontario',
            'services' => array(
                array('title' => 'Local SEO in Ontario', 'desc' => 'We build local SEO strategies that get your Ontario business in front of customers actively searching nearby. Our work covers Google Business Profile optimisation, local citation building, and location-specific landing pages. The result: your business appears in local search results when it matters most.'),
                array('title' => 'On-Page SEO Optimisation', 'desc' => 'Every page of your website sends signals to Google. We review and improve titles, meta descriptions, headings, content structure, and internal links so your Ontario website is fully optimised for the searches your customers are performing.'),
                array('title' => 'Technical SEO Audits', 'desc' => 'Site speed, mobile performance, crawl errors, and indexability all affect your rankings. We identify and fix every technical issue holding your website back, creating a solid foundation for long-term growth.'),
                array('title' => 'Link Building and Authority', 'desc' => 'We earn high-quality backlinks from reputable Canadian and industry-relevant sources. Building domain authority through ethical link building is one of the most reliable ways to rise above competitors on Google.'),
                array('title' => 'Google Business Profile Optimisation', 'desc' => 'Your Google Business Profile is one of your most powerful tools for local visibility. We optimise every section, including categories, descriptions, photos, and service listings, so your Ontario business appears prominently in Google Maps and local pack results.'),
                array('title' => 'Content Marketing and Blogging', 'desc' => 'Well-written, reader-focused content builds trust and earns rankings. Our content team creates blog posts, service pages, and location content tailored to your Ontario audience. Every piece is written to inform, engage, and rank.'),
            ),

            'choose_title' => 'Why Choose SEO Service Canada in Ontario?',
            'choose_items' => array(
                array('title' => 'No Long-Term Contracts', 'desc' => 'You stay because you see results, not because you are locked in.'),
                array('title' => 'Transparent Monthly Reporting', 'desc' => 'You always know exactly what we are doing and what it is achieving.'),
                array('title' => '100% Canadian Focus', 'desc' => 'We understand Ontario\'s market, consumer behaviour, and regional differences.'),
                array('title' => 'Custom Strategy for Every Client', 'desc' => 'Your SEO plan is built around your business, not a generic template.'),
                array('title' => 'Dedicated Account Manager', 'desc' => 'One point of contact who knows your business and your goals throughout.'),
                array('title' => 'Free SEO Audit', 'desc' => 'Every new client starts with a thorough, no-obligation audit.'),
            ),
            'choose_cta' => 'Get Your Free Ontario SEO Audit',

            'process_title' => 'Our SEO Process for Ontario Businesses',
            'process_steps' => array(
                array('title' => 'Free SEO Audit', 'desc' => 'We begin with a comprehensive audit of your website, rankings, and online presence. This gives us a clear picture of where you stand and exactly what needs to improve.'),
                array('title' => 'Custom Strategy', 'desc' => 'We build a tailored SEO strategy aligned with your Ontario market, your industry, and your specific business goals.'),
                array('title' => 'On-Page and Technical Fixes', 'desc' => 'We implement all on-page improvements and technical corrections quickly and carefully. This forms the clean foundation that all future SEO work builds on.'),
                array('title' => 'Content and Link Building', 'desc' => 'We create high-quality content targeting your key search terms and build authoritative backlinks that grow your domain\'s credibility with Google over time.'),
                array('title' => 'Monthly Reporting', 'desc' => 'Every month you receive a clear, plain-language report showing your ranking progress, traffic growth, and completed work.'),
            ),

            'industries_title' => 'Industries We Serve in Ontario',
            'industries' => array(
                'Restaurants and Food Services',
                'Law Firms and Legal Services',
                'Dental Clinics and Orthodontists',
                'Real Estate Agents and Brokerages',
                'E-commerce Stores',
                'Medical Clinics and Healthcare Providers',
                'General Contractors and Renovators',
                'Auto Repair and Dealerships',
                'Accounting and Financial Services',
                'Gyms and Fitness Studios',
                'Plumbers and HVAC Companies',
                'Mortgage Brokers and Financial Advisors',
            ),

            'cities_title' => 'SEO Services Across Ontario: Cities We Serve',
            'cities_intro' => 'We provide dedicated SEO services throughout Ontario.',
            'cities' => array(
                'Toronto', 'Ottawa', 'Mississauga', 'Brampton', 'Hamilton', 'London', 'Markham', 'Vaughan', 'Kitchener', 'Windsor', 'North York', 'Scarborough', 'Etobicoke', 'Barrie', 'Sudbury', 'Thunder Bay', 'Kingston', 'Guelph', 'Oshawa', 'St. Catharines',
            ),

            'faq_title' => 'Frequently Asked Questions: SEO Services in Ontario',
            'faqs' => array(
                array('q' => 'How long does SEO take in Ontario?', 'a' => 'Most Ontario businesses begin seeing noticeable improvements within three to six months. SEO builds over time, and results compound with consistency. More competitive industries or cities may take longer to reach the first page, but the results are sustainable once earned.'),
                array('q' => 'How much do SEO services cost in Ontario?', 'a' => 'Pricing varies based on the scope of work, your industry, and your goals. We do not publish flat rates because every Ontario business is different. Contact us for a free audit and a transparent, custom quote.'),
                array('q' => 'Do you offer local SEO for small businesses in Ontario?', 'a' => 'Absolutely. We work with small and medium-sized Ontario businesses every day. Local SEO is one of the most cost-effective marketing tools available to smaller businesses, and we build strategies that fit your budget and market.'),
                array('q' => 'Can you guarantee first page rankings in Ontario?', 'a' => 'No ethical SEO agency can guarantee specific rankings, and we will never make that promise. What we do guarantee is honest, proven work that consistently moves your Ontario business up the rankings over time.'),
                array('q' => 'What makes SEO Service Canada different from other agencies in Ontario?', 'a' => 'We focus exclusively on the Canadian market, which means we understand Ontario\'s regional nuances, competitive landscape, and consumer habits. We offer transparent reporting, no long-term contracts, and a dedicated account manager for every client.'),
            ),

            'cta_title' => 'Ready to Dominate Ontario Search Results?',
            'cta_text' => 'Ontario is a competitive market, and the businesses that invest in SEO now will be the ones winning customers online for years to come. Your next customer is already searching on Google. Make sure they find your business first.',
            'cta_line' => 'Contact SEO Service Canada today for your FREE Ontario SEO Audit.',
        ),

        'british-columbia' => array(
            'name' => 'British Columbia',
            'layout' => 'b',
            'accent' => '#0e7c61',
            'meta_description' => 'Looking for expert SEO services in British Columbia? SEO Service Canada helps BC businesses rank higher on Google and drive real results. Get a free audit today.',

            'hero_intro' => 'British Columbia is one of Canada\'s most dynamic and fast-growing provinces. From the tech corridors and busy commercial districts of Vancouver to the thriving small business communities in Victoria, Kelowna, Abbotsford, and Surrey, BC is home to a diverse and competitive business landscape. Consumers here are digitally active, and they use Google every single day to find local services, compare options, and make purchasing decisions.
If your British Columbia business is not appearing on the first page of Google, you are invisible to a large portion of your potential customers. SEO Service Canada works with BC businesses across industries and cities to improve Google rankings, grow website traffic, and bring in more local customers.',
            'hero_cta' => 'Get Your Free BC SEO Audit',

            'why_title' => 'Why SEO Matters for British Columbia Businesses',
            'why_paragraphs' => array(
                'British Columbia has one of the highest rates of internet use in Canada. Consumers in Metro Vancouver, the Fraser Valley, and the Interior rely heavily on Google when searching for everything from contractors and restaurants to medical clinics and legal services. The first page of search results captures the overwhelming majority of clicks, and businesses on page two or beyond rarely see meaningful traffic.',
                'Mobile search is especially prominent in BC\'s urban centres. People search on the go, often looking for businesses nearby with immediate availability. Without strong local SEO, your business does not exist in those searches.',
                'Competitors who invest in SEO are consistently winning customers that could have been yours. A strong Google presence in British Columbia means your business is generating leads and enquiries around the clock.',
            ),

            'services_title' => 'Our SEO Services in British Columbia',
            'services' => array(
                array('title' => 'Local SEO in British Columbia', 'desc' => 'We build local SEO strategies that get your British Columbia business in front of customers actively searching nearby. Our work covers Google Business Profile optimisation, local citation building, and location-specific landing pages. The result: your business appears in local search results when it matters most.'),
                array('title' => 'On-Page SEO Optimisation', 'desc' => 'Every page of your website sends signals to Google. We review and improve titles, meta descriptions, headings, content structure, and internal links so your British Columbia website is fully optimised for the searches your customers are performing.'),
                array('title' => 'Technical SEO Audits', 'desc' => 'Site speed, mobile performance, crawl errors, and indexability all affect your rankings. We identify and fix every technical issue holding your website back, creating a solid foundation for long-term growth.'),
                array('title' => 'Link Building and Authority', 'desc' => 'We earn high-quality backlinks from reputable Canadian and industry-relevant sources. Building domain authority through ethical link building is one of the most reliable ways to rise above competitors on Google.'),
                array('title' => 'Google Business Profile Optimisation', 'desc' => 'Your Google Business Profile is one of your most powerful tools for local visibility. We optimise every section, including categories, descriptions, photos, and service listings, so your British Columbia business appears prominently in Google Maps and local pack results.'),
                array('title' => 'Content Marketing and Blogging', 'desc' => 'Well-written, reader-focused content builds trust and earns rankings. Our content team creates blog posts, service pages, and location content tailored to your British Columbia audience. Every piece is written to inform, engage, and rank.'),
            ),

            'choose_title' => 'Why Choose SEO Service Canada in British Columbia?',
            'choose_items' => array(
                array('title' => 'No Long-Term Contracts', 'desc' => 'You stay because you see results, not because you are locked in.'),
                array('title' => 'Transparent Monthly Reporting', 'desc' => 'You always know exactly what we are doing and what it is achieving.'),
                array('title' => '100% Canadian Focus', 'desc' => 'We understand British Columbia\'s market, consumer behaviour, and regional differences.'),
                array('title' => 'Custom Strategy for Every Client', 'desc' => 'Your SEO plan is built around your business, not a generic template.'),
                array('title' => 'Dedicated Account Manager', 'desc' => 'One point of contact who knows your business and your goals throughout.'),
                array('title' => 'Free SEO Audit', 'desc' => 'Every new client starts with a thorough, no-obligation audit.'),
            ),
            'choose_cta' => 'Get Your Free British Columbia SEO Audit',

            'process_title' => 'Our SEO Process for British Columbia Businesses',
            'process_steps' => array(
                array('title' => 'Free SEO Audit', 'desc' => 'We begin with a comprehensive audit of your website, rankings, and online presence. This gives us a clear picture of where you stand and exactly what needs to improve.'),
                array('title' => 'Custom Strategy', 'desc' => 'We build a tailored SEO strategy aligned with your British Columbia market, your industry, and your specific business goals.'),
                array('title' => 'On-Page and Technical Fixes', 'desc' => 'We implement all on-page improvements and technical corrections quickly and carefully. This forms the clean foundation that all future SEO work builds on.'),
                array('title' => 'Content and Link Building', 'desc' => 'We create high-quality content targeting your key search terms and build authoritative backlinks that grow your domain\'s credibility with Google over time.'),
                array('title' => 'Monthly Reporting', 'desc' => 'Every month you receive a clear, plain-language report showing your ranking progress, traffic growth, and completed work.'),
            ),

            'industries_title' => 'Industries We Serve in British Columbia',
            'industries' => array(
                'Restaurants and Cafes',
                'Law Firms and Legal Services',
                'Dental Clinics and Specialists',
                'Real Estate Agents and Developers',
                'E-commerce Stores',
                'Medical and Naturopathic Clinics',
                'Renovation Contractors and Builders',
                'Auto Repair and Detailing',
                'Accounting and Tax Services',
                'Gyms, Yoga Studios, and Wellness Centres',
                'Tech Startups and Software Companies',
                'Tourism and Hospitality Businesses',
            ),

            'cities_title' => 'SEO Services Across British Columbia: Cities We Serve',
            'cities_intro' => 'We provide dedicated SEO services throughout British Columbia.',
            'cities' => array(
                'Vancouver', 'Surrey', 'Burnaby', 'Richmond', 'Kelowna', 'Abbotsford', 'Victoria', 'Langley', 'Coquitlam', 'Kamloops', 'Prince George', 'Nanaimo', 'Chilliwack', 'Maple Ridge', 'New Westminster',
            ),

            'faq_title' => 'Frequently Asked Questions: SEO Services in British Columbia',
            'faqs' => array(
                array('q' => 'How long does SEO take in British Columbia?', 'a' => 'Most BC businesses start seeing meaningful ranking improvements between three and six months after work begins. Results grow and compound over time. Highly competitive markets like Vancouver may take longer, but the long-term return on investment is significant.'),
                array('q' => 'How much do SEO services cost in British Columbia?', 'a' => 'Every business is different, and pricing depends on your goals, market, and competition level. We do not list flat rates because we build custom strategies. Contact us for a free audit and a clear, honest quote.'),
                array('q' => 'Do you offer local SEO for small businesses in British Columbia?', 'a' => 'Yes, and small businesses are where local SEO makes the biggest difference. We work with independent shops, solo practitioners, and growing small businesses across BC to help them compete online and win local customers.'),
                array('q' => 'Can you guarantee first page rankings in British Columbia?', 'a' => 'We do not guarantee specific rankings, and you should be cautious of any agency that does. What we do guarantee is consistent, ethical work that moves your BC business steadily up the search results over time.'),
                array('q' => 'What makes SEO Service Canada different from other agencies in British Columbia?', 'a' => 'We are 100% focused on the Canadian market, which means we understand what works in British Columbia specifically. We offer no long-term contracts, transparent reporting, and a custom strategy for every client, with a dedicated account manager who is always available.'),
            ),

            'cta_title' => 'Ready to Dominate British Columbia Search Results?',
            'cta_text' => 'From Vancouver to Victoria and every community in between, British Columbia businesses are competing hard for Google\'s first page. SEO Service Canada gives you the strategy, the execution, and the transparent reporting you need to come out on top.',
            'cta_line' => 'Contact SEO Service Canada today for your FREE British Columbia SEO Audit.',
        ),

        'alberta' => array(
            'name' => 'Alberta',
            'layout' => 'c',
            'accent' => '#c2410c',
            'meta_description' => 'Looking for expert SEO services in Alberta? SEO Service Canada helps Alberta businesses rank higher on Google and drive real results. Get a free audit today.',

            'hero_intro' => 'Alberta has one of the most entrepreneurial business cultures in Canada. From the corporate towers of Calgary and the thriving commercial districts of Edmonton to the growing communities of Red Deer, Lethbridge, and Fort McMurray, the province is home to a wide range of ambitious businesses. A strong economy, low tax environment, and steady population growth make Alberta one of the most competitive markets in the country.
That competition also means the race for visibility on Google is intense. Alberta consumers search for local businesses every day, and the companies showing up at the top of those results are capturing the majority of that demand. SEO Service Canada helps Alberta businesses earn the Google rankings they deserve, with custom strategies built for your industry, your city, and your goals.',
            'hero_cta' => 'Get Your Free Alberta SEO Audit',

            'why_title' => 'Why SEO Matters for Alberta Businesses',
            'why_paragraphs' => array(
                'Alberta\'s workforce is busy and mobile-first. People in Calgary looking for an accountant or homeowners in Edmonton searching for a renovation contractor all start on Google. Businesses on the first page earn the click. Businesses further down rarely do.',
                'Local search behaviour has shifted significantly. A growing share of searches include location intent, and Google now personalises results based on the user\'s city. This means your rankings in Calgary or Edmonton are distinct from rankings elsewhere in Canada. Without proper local SEO, your business may not appear in those results at all.',
                'Alberta businesses that invest in SEO now are building a long-term competitive advantage. Every month you rank higher, you earn more clicks, more enquiries, and more revenue, without paying for every single visit the way you do with paid ads.',
            ),

            'services_title' => 'Our SEO Services in Alberta',
            'services' => array(
                array('title' => 'Local SEO in Alberta', 'desc' => 'We build local SEO strategies that get your Alberta business in front of customers actively searching nearby. Our work covers Google Business Profile optimisation, local citation building, and location-specific landing pages. The result: your business appears in local search results when it matters most.'),
                array('title' => 'On-Page SEO Optimisation', 'desc' => 'Every page of your website sends signals to Google. We review and improve titles, meta descriptions, headings, content structure, and internal links so your Alberta website is fully optimised for the searches your customers are performing.'),
                array('title' => 'Technical SEO Audits', 'desc' => 'Site speed, mobile performance, crawl errors, and indexability all affect your rankings. We identify and fix every technical issue holding your website back, creating a solid foundation for long-term growth.'),
                array('title' => 'Link Building and Authority', 'desc' => 'We earn high-quality backlinks from reputable Canadian and industry-relevant sources. Building domain authority through ethical link building is one of the most reliable ways to rise above competitors on Google.'),
                array('title' => 'Google Business Profile Optimisation', 'desc' => 'Your Google Business Profile is one of your most powerful tools for local visibility. We optimise every section, including categories, descriptions, photos, and service listings, so your Alberta business appears prominently in Google Maps and local pack results.'),
                array('title' => 'Content Marketing and Blogging', 'desc' => 'Well-written, reader-focused content builds trust and earns rankings. Our content team creates blog posts, service pages, and location content tailored to your Alberta audience. Every piece is written to inform, engage, and rank.'),
            ),

            'choose_title' => 'Why Choose SEO Service Canada in Alberta?',
            'choose_items' => array(
                array('title' => 'No Long-Term Contracts', 'desc' => 'You stay because you see results, not because you are locked in.'),
                array('title' => 'Transparent Monthly Reporting', 'desc' => 'You always know exactly what we are doing and what it is achieving.'),
                array('title' => '100% Canadian Focus', 'desc' => 'We understand Alberta\'s market, consumer behaviour, and regional differences.'),
                array('title' => 'Custom Strategy for Every Client', 'desc' => 'Your SEO plan is built around your business, not a generic template.'),
                array('title' => 'Dedicated Account Manager', 'desc' => 'One point of contact who knows your business and your goals throughout.'),
                array('title' => 'Free SEO Audit', 'desc' => 'Every new client starts with a thorough, no-obligation audit.'),
            ),
            'choose_cta' => 'Get Your Free Alberta SEO Audit',

            'process_title' => 'Our SEO Process for Alberta Businesses',
            'process_steps' => array(
                array('title' => 'Free SEO Audit', 'desc' => 'We begin with a comprehensive audit of your website, rankings, and online presence. This gives us a clear picture of where you stand and exactly what needs to improve.'),
                array('title' => 'Custom Strategy', 'desc' => 'We build a tailored SEO strategy aligned with your Alberta market, your industry, and your specific business goals.'),
                array('title' => 'On-Page and Technical Fixes', 'desc' => 'We implement all on-page improvements and technical corrections quickly and carefully. This forms the clean foundation that all future SEO work builds on.'),
                array('title' => 'Content and Link Building', 'desc' => 'We create high-quality content targeting your key search terms and build authoritative backlinks that grow your domain\'s credibility with Google over time.'),
                array('title' => 'Monthly Reporting', 'desc' => 'Every month you receive a clear, plain-language report showing your ranking progress, traffic growth, and completed work.'),
            ),

            'industries_title' => 'Industries We Serve in Alberta',
            'industries' => array(
                'Oil and Gas Support Services',
                'Law Firms and Legal Professionals',
                'Dental Clinics and Orthodontists',
                'Real Estate Agents and Mortgage Brokers',
                'Restaurants and Hospitality',
                'Medical Clinics and Chiropractors',
                'General Contractors and Home Builders',
                'Auto Repair and Dealerships',
                'Accounting and Bookkeeping Firms',
                'Gyms and Personal Training Studios',
                'E-commerce Retailers',
                'Engineering and Consulting Firms',
            ),

            'cities_title' => 'SEO Services Across Alberta: Cities We Serve',
            'cities_intro' => 'We provide dedicated SEO services throughout Alberta.',
            'cities' => array(
                'Calgary', 'Edmonton', 'Red Deer', 'Lethbridge', 'St. Albert', 'Medicine Hat', 'Grande Prairie', 'Airdrie', 'Spruce Grove', 'Fort McMurray', 'Leduc', 'Sherwood Park',
            ),

            'faq_title' => 'Frequently Asked Questions: SEO Services in Alberta',
            'faqs' => array(
                array('q' => 'How long does SEO take in Alberta?', 'a' => 'Results typically begin to show within three to six months of starting. In highly competitive Alberta markets like Calgary or Edmonton, it may take a little longer to reach the first page, but consistent work produces steady and sustainable improvements.'),
                array('q' => 'How much do SEO services cost in Alberta?', 'a' => 'Pricing depends on your industry, target market, and the scope of work needed. We build a custom quote after your free audit, so you know exactly what you are investing and what to expect in return.'),
                array('q' => 'Do you offer local SEO for small businesses in Alberta?', 'a' => 'Yes, absolutely. Many of our most successful clients are small to medium-sized Alberta businesses. Local SEO is one of the most affordable and effective ways for smaller companies to compete with bigger players in their market.'),
                array('q' => 'Can you guarantee first page rankings in Alberta?', 'a' => 'No reputable SEO agency can guarantee specific placements, and we will never make that claim. We can promise consistent, honest work that moves your Alberta business up the rankings month after month.'),
                array('q' => 'What makes SEO Service Canada different from other agencies in Alberta?', 'a' => 'We are 100% focused on Canada, which means we understand Alberta\'s specific industries, search patterns, and competition levels. We offer transparent reporting, no long-term lock-ins, and a custom approach for every client.'),
            ),

            'cta_title' => 'Ready to Dominate Alberta Search Results?',
            'cta_text' => 'Alberta\'s business community is strong, ambitious, and competitive. The companies investing in SEO today are building the online visibility that will carry them for years. SEO Service Canada is ready to help your business grow.',
            'cta_line' => 'Contact SEO Service Canada today for your FREE Alberta SEO Audit.',
        ),

        'quebec' => array(
            'name' => 'Quebec',
            'layout' => 'a',
            'accent' => '#1d4ed8',
            'meta_description' => 'Looking for expert SEO services in Quebec? SEO Service Canada helps Quebec businesses rank higher on Google and drive real results. Get a free audit today.',

            'hero_intro' => 'Quebec is a province with a distinct identity, a vibrant economy, and a deeply engaged consumer base. From the cosmopolitan commercial markets of Montreal and the historic business communities of Quebec City to the growing industries of Laval, Longueuil, and the surrounding regions, Quebec is full of businesses competing for local attention.
Quebec\'s bilingual character sets it apart in the Canadian SEO landscape. Consumers here search in both French and English, and a well-built SEO strategy must account for both. SEO Service Canada understands the Quebec market and builds strategies that reflect the real way your local customers search for businesses like yours. Your online visibility on Google directly impacts your revenue, and we are here to improve it.',
            'hero_cta' => 'Get Your Free Quebec SEO Audit',

            'why_title' => 'Why SEO Matters for Quebec Businesses',
            'why_paragraphs' => array(
                'Quebec consumers are active, mobile, and research-driven. Before making a purchase or booking a service, most people turn to Google first. They compare options, read reviews, and choose businesses that appear credible and accessible. If your website is not on the first page, a large portion of that audience will never reach you.',
                'Mobile search plays a central role in Quebec\'s urban centres. In Montreal and Quebec City, people search for nearby businesses while commuting, working, and going about their daily lives. Local search results, including the Google Maps pack, capture significant traffic from people who are ready to buy or book.',
                'Missing from page one is not a minor inconvenience. It is a consistent source of lost revenue. Every month without a strong SEO presence is another month of potential customers finding your competitors instead of you.',
            ),

            'services_title' => 'Our SEO Services in Quebec',
            'services' => array(
                array('title' => 'Local SEO in Quebec', 'desc' => 'We build local SEO strategies that get your Quebec business in front of customers actively searching nearby. Our work covers Google Business Profile optimisation, local citation building, and location-specific landing pages. The result: your business appears in local search results when it matters most.'),
                array('title' => 'On-Page SEO Optimisation', 'desc' => 'Every page of your website sends signals to Google. We review and improve titles, meta descriptions, headings, content structure, and internal links so your Quebec website is fully optimised for the searches your customers are performing.'),
                array('title' => 'Technical SEO Audits', 'desc' => 'Site speed, mobile performance, crawl errors, and indexability all affect your rankings. We identify and fix every technical issue holding your website back, creating a solid foundation for long-term growth.'),
                array('title' => 'Link Building and Authority', 'desc' => 'We earn high-quality backlinks from reputable Canadian and industry-relevant sources. Building domain authority through ethical link building is one of the most reliable ways to rise above competitors on Google.'),
                array('title' => 'Google Business Profile Optimisation', 'desc' => 'Your Google Business Profile is one of your most powerful tools for local visibility. We optimise every section, including categories, descriptions, photos, and service listings, so your Quebec business appears prominently in Google Maps and local pack results.'),
                array('title' => 'Content Marketing and Blogging', 'desc' => 'Well-written, reader-focused content builds trust and earns rankings. Our content team creates blog posts, service pages, and location content tailored to your Quebec audience. Every piece is written to inform, engage, and rank.'),
            ),

            'choose_title' => 'Why Choose SEO Service Canada in Quebec?',
            'choose_items' => array(
                array('title' => 'No Long-Term Contracts', 'desc' => 'You stay because you see results, not because you are locked in.'),
                array('title' => 'Transparent Monthly Reporting', 'desc' => 'You always know exactly what we are doing and what it is achieving.'),
                array('title' => '100% Canadian Focus', 'desc' => 'We understand Quebec\'s market, consumer behaviour, and regional differences.'),
                array('title' => 'Custom Strategy for Every Client', 'desc' => 'Your SEO plan is built around your business, not a generic template.'),
                array('title' => 'Dedicated Account Manager', 'desc' => 'One point of contact who knows your business and your goals throughout.'),
                array('title' => 'Free SEO Audit', 'desc' => 'Every new client starts with a thorough, no-obligation audit.'),
            ),
            'choose_cta' => 'Get Your Free Quebec SEO Audit',

            'process_title' => 'Our SEO Process for Quebec Businesses',
            'process_steps' => array(
                array('title' => 'Free SEO Audit', 'desc' => 'We begin with a comprehensive audit of your website, rankings, and online presence. This gives us a clear picture of where you stand and exactly what needs to improve.'),
                array('title' => 'Custom Strategy', 'desc' => 'We build a tailored SEO strategy aligned with your Quebec market, your industry, and your specific business goals.'),
                array('title' => 'On-Page and Technical Fixes', 'desc' => 'We implement all on-page improvements and technical corrections quickly and carefully. This forms the clean foundation that all future SEO work builds on.'),
                array('title' => 'Content and Link Building', 'desc' => 'We create high-quality content targeting your key search terms and build authoritative backlinks that grow your domain\'s credibility with Google over time.'),
                array('title' => 'Monthly Reporting', 'desc' => 'Every month you receive a clear, plain-language report showing your ranking progress, traffic growth, and completed work.'),
            ),

            'industries_title' => 'Industries We Serve in Quebec',
            'industries' => array(
                'Restaurants and Food Services',
                'Law Firms and Notaries',
                'Dental Clinics and Specialists',
                'Real Estate Agents and Developers',
                'E-commerce Stores',
                'Medical Clinics and Healthcare Providers',
                'Renovation Contractors and Builders',
                'Auto Repair and Body Shops',
                'Accounting and Financial Services',
                'Gyms and Wellness Studios',
                'Tourism and Hospitality',
                'Manufacturing and Industrial Services',
            ),

            'cities_title' => 'SEO Services Across Quebec: Cities We Serve',
            'cities_intro' => 'We provide dedicated SEO services throughout Quebec.',
            'cities' => array(
                'Montreal', 'Quebec City', 'Laval', 'Longueuil', 'Gatineau', 'Sherbrooke', 'Saguenay', 'Levis', 'Trois-Rivieres', 'Terrebonne', 'Saint-Jean-sur-Richelieu', 'Repentigny',
            ),

            'faq_title' => 'Frequently Asked Questions: SEO Services in Quebec',
            'faqs' => array(
                array('q' => 'How long does SEO take in Quebec?', 'a' => 'Most Quebec businesses begin seeing meaningful improvements within three to six months. Montreal and Quebec City are competitive markets where results can take a bit longer, but consistent work builds sustainable rankings over time.'),
                array('q' => 'How much do SEO services cost in Quebec?', 'a' => 'Every business is different, so we do not publish flat rates. After your free SEO audit, we provide a custom, transparent quote that reflects your specific needs and market.'),
                array('q' => 'Do you offer local SEO for small businesses in Quebec?', 'a' => 'Yes, and small businesses in Quebec benefit enormously from local SEO. It is one of the most cost-effective ways to compete with larger brands and attract local customers who are actively searching for what you offer.'),
                array('q' => 'Can you guarantee first page rankings in Quebec?', 'a' => 'No ethical SEO agency can guarantee specific rankings. What we promise is consistent, quality work that moves your Quebec business steadily up the Google results over time.'),
                array('q' => 'What makes SEO Service Canada different from other agencies in Quebec?', 'a' => 'We understand the bilingual dynamics of the Quebec search market and build strategies that reflect them. We also offer no long-term contracts, full transparency, and a custom approach for every client with a dedicated account manager throughout.'),
            ),

            'cta_title' => 'Ready to Dominate Quebec Search Results?',
            'cta_text' => 'Quebec is a competitive province with a sophisticated consumer base. The businesses that invest in SEO now will be the ones dominating Google results in Montreal, Quebec City, and beyond for years to come.',
            'cta_line' => 'Contact SEO Service Canada today for your FREE Quebec SEO Audit.',
        ),

        'saskatchewan' => array(
            'name' => 'Saskatchewan',
            'layout' => 'b',
            'accent' => '#b45309',
            'meta_description' => 'Looking for expert SEO services in Saskatchewan? SEO Service Canada helps Saskatchewan businesses rank higher on Google and drive real results. Get a free audit today.',

            'hero_intro' => 'Saskatchewan is a province with deep roots and a growing future. While the province has long been associated with agriculture and natural resources, its economy has diversified significantly. Saskatoon and Regina have emerged as genuine business hubs, while smaller cities and towns across Saskatchewan are home to thriving local businesses serving loyal communities.
Most Saskatchewan businesses share one thing in common: an untapped opportunity online. Many competitors in this province have not yet invested seriously in SEO, which means the businesses that act now can gain a strong first-page presence before the space becomes crowded. Saskatchewan is one of the most underserved SEO markets in Canada, and that is a real advantage for businesses willing to move. SEO Service Canada helps you build that advantage.',
            'hero_cta' => 'Get Your Free Saskatchewan SEO Audit',

            'why_title' => 'Why SEO Matters for Saskatchewan Businesses',
            'why_paragraphs' => array(
                'Saskatchewan consumers search Google daily for local products, services, and businesses. A person in Saskatoon looking for a chiropractor or a family in Regina searching for a reliable plumber starts that search on Google. Businesses on the first page earn the majority of that traffic. Businesses further down the page rarely get a look.',
                'Mobile search has changed the landscape even in smaller Saskatchewan communities. Smartphones have put Google in everyone\'s pocket, and local intent searches have become a regular part of how people find businesses. Without proper local SEO, your business is invisible in those searches.',
                'The good news for Saskatchewan businesses is that online competition is still relatively low compared to provinces like Ontario or British Columbia. A well-executed SEO campaign here can produce results faster and hold them longer. The window to move first is open, but it will not stay open forever.',
            ),

            'services_title' => 'Our SEO Services in Saskatchewan',
            'services' => array(
                array('title' => 'Local SEO in Saskatchewan', 'desc' => 'We build local SEO strategies that get your Saskatchewan business in front of customers actively searching nearby. Our work covers Google Business Profile optimisation, local citation building, and location-specific landing pages. The result: your business appears in local search results when it matters most.'),
                array('title' => 'On-Page SEO Optimisation', 'desc' => 'Every page of your website sends signals to Google. We review and improve titles, meta descriptions, headings, content structure, and internal links so your Saskatchewan website is fully optimised for the searches your customers are performing.'),
                array('title' => 'Technical SEO Audits', 'desc' => 'Site speed, mobile performance, crawl errors, and indexability all affect your rankings. We identify and fix every technical issue holding your website back, creating a solid foundation for long-term growth.'),
                array('title' => 'Link Building and Authority', 'desc' => 'We earn high-quality backlinks from reputable Canadian and industry-relevant sources. Building domain authority through ethical link building is one of the most reliable ways to rise above competitors on Google.'),
                array('title' => 'Google Business Profile Optimisation', 'desc' => 'Your Google Business Profile is one of your most powerful tools for local visibility. We optimise every section, including categories, descriptions, photos, and service listings, so your Saskatchewan business appears prominently in Google Maps and local pack results.'),
                array('title' => 'Content Marketing and Blogging', 'desc' => 'Well-written, reader-focused content builds trust and earns rankings. Our content team creates blog posts, service pages, and location content tailored to your Saskatchewan audience. Every piece is written to inform, engage, and rank.'),
            ),

            'choose_title' => 'Why Choose SEO Service Canada in Saskatchewan?',
            'choose_items' => array(
                array('title' => 'No Long-Term Contracts', 'desc' => 'You stay because you see results, not because you are locked in.'),
                array('title' => 'Transparent Monthly Reporting', 'desc' => 'You always know exactly what we are doing and what it is achieving.'),
                array('title' => '100% Canadian Focus', 'desc' => 'We understand Saskatchewan\'s market, consumer behaviour, and regional differences.'),
                array('title' => 'Custom Strategy for Every Client', 'desc' => 'Your SEO plan is built around your business, not a generic template.'),
                array('title' => 'Dedicated Account Manager', 'desc' => 'One point of contact who knows your business and your goals throughout.'),
                array('title' => 'Free SEO Audit', 'desc' => 'Every new client starts with a thorough, no-obligation audit.'),
            ),
            'choose_cta' => 'Get Your Free Saskatchewan SEO Audit',

            'process_title' => 'Our SEO Process for Saskatchewan Businesses',
            'process_steps' => array(
                array('title' => 'Free SEO Audit', 'desc' => 'We begin with a comprehensive audit of your website, rankings, and online presence. This gives us a clear picture of where you stand and exactly what needs to improve.'),
                array('title' => 'Custom Strategy', 'desc' => 'We build a tailored SEO strategy aligned with your Saskatchewan market, your industry, and your specific business goals.'),
                array('title' => 'On-Page and Technical Fixes', 'desc' => 'We implement all on-page improvements and technical corrections quickly and carefully. This forms the clean foundation that all future SEO work builds on.'),
                array('title' => 'Content and Link Building', 'desc' => 'We create high-quality content targeting your key search terms and build authoritative backlinks that grow your domain\'s credibility with Google over time.'),
                array('title' => 'Monthly Reporting', 'desc' => 'Every month you receive a clear, plain-language report showing your ranking progress, traffic growth, and completed work.'),
            ),

            'industries_title' => 'Industries We Serve in Saskatchewan',
            'industries' => array(
                'Agricultural Equipment and Services',
                'Law Firms and Legal Services',
                'Dental Clinics and Orthodontists',
                'Real Estate Agents',
                'Restaurants and Food Services',
                'Medical Clinics and Healthcare Providers',
                'Contractors and Home Builders',
                'Auto Repair and Dealerships',
                'Accounting and Bookkeeping',
                'Gyms and Fitness Studios',
                'E-commerce Retailers',
                'Credit Unions and Financial Services',
            ),

            'cities_title' => 'SEO Services Across Saskatchewan: Cities We Serve',
            'cities_intro' => 'We provide dedicated SEO services throughout Saskatchewan.',
            'cities' => array(
                'Saskatoon', 'Regina', 'Prince Albert', 'Moose Jaw', 'Swift Current', 'Yorkton', 'North Battleford', 'Estevan', 'Weyburn', 'Lloydminster', 'Martensville', 'Warman',
            ),

            'faq_title' => 'Frequently Asked Questions: SEO Services in Saskatchewan',
            'faqs' => array(
                array('q' => 'How long does SEO take in Saskatchewan?', 'a' => 'Because the online competition in Saskatchewan is lower than in larger provinces, many businesses begin seeing strong improvements within two to four months. Results continue to build over time with consistent effort.'),
                array('q' => 'How much do SEO services cost in Saskatchewan?', 'a' => 'Pricing is based on your specific goals, market, and competition level. We provide a custom quote after your free SEO audit so you know exactly what you are getting and what it costs.'),
                array('q' => 'Do you offer local SEO for small businesses in Saskatchewan?', 'a' => 'Yes. In fact, Saskatchewan small businesses stand to gain some of the strongest results from local SEO because competition online is still modest. Acting now gives you a real advantage that compounds over time.'),
                array('q' => 'Can you guarantee first page rankings in Saskatchewan?', 'a' => 'We do not make ranking guarantees, and any agency that does should be treated with caution. What we do commit to is consistent, quality SEO work that moves your Saskatchewan business up the results over time.'),
                array('q' => 'What makes SEO Service Canada different from other agencies in Saskatchewan?', 'a' => 'Very few Canadian SEO agencies have dedicated strategies for Saskatchewan. We do. We understand the province\'s business landscape, its search patterns, and its unique market dynamics, and we build around all of it.'),
            ),

            'cta_title' => 'Ready to Dominate Saskatchewan Search Results?',
            'cta_text' => 'Saskatchewan\'s online landscape is still wide open compared to larger Canadian provinces. Businesses that invest in SEO now will own the first page in Saskatoon, Regina, and across the province for years to come, well ahead of competitors who delay.',
            'cta_line' => 'Contact SEO Service Canada today for your FREE Saskatchewan SEO Audit.',
        ),

        'manitoba' => array(
            'name' => 'Manitoba',
            'layout' => 'c',
            'accent' => '#7c3aed',
            'meta_description' => 'Looking for expert SEO services in Manitoba? SEO Service Canada helps Manitoba businesses rank higher on Google and drive real results. Get a free audit today.',

            'hero_intro' => 'Manitoba sits at the heart of Canada, and its business community reflects that central, connected character. Winnipeg is the province\'s economic anchor, home to a diverse and growing range of businesses across finance, retail, healthcare, logistics, and more. Beyond the capital, communities like Brandon, Steinbach, and Portage la Prairie support active local economies with their own loyal customer bases.
For Manitoba businesses, the opportunity online is significant and in many cases still largely unclaimed. Consumers across the province are turning to Google every day to find local services, yet many local businesses have not yet invested in the SEO needed to capture that traffic. That gap is your opportunity. SEO Service Canada helps Manitoba businesses close it.',
            'hero_cta' => 'Get Your Free Manitoba SEO Audit',

            'why_title' => 'Why SEO Matters for Manitoba Businesses',
            'why_paragraphs' => array(
                'Winnipeg is one of Canada\'s most underestimated business cities, and it is growing. Across Manitoba, consumers use Google constantly to search for local services, compare options, and decide where to spend their money. The vast majority of clicks go to businesses on the first page of results, and businesses beyond page one are largely invisible.',
                'Local search behaviour is strong across Manitoba\'s communities. A person searching for a dentist in Winnipeg or a contractor in Brandon expects to find credible, accessible results quickly. Businesses that have optimised their online presence consistently win those clicks over businesses that have not.',
                'For Manitoba businesses, investing in SEO is also a competitive move. Online competition here is lower than in provinces like Ontario or British Columbia, which means a well-run campaign can achieve strong results more quickly and sustain them with less effort over time.',
            ),

            'services_title' => 'Our SEO Services in Manitoba',
            'services' => array(
                array('title' => 'Local SEO in Manitoba', 'desc' => 'We build local SEO strategies that get your Manitoba business in front of customers actively searching nearby. Our work covers Google Business Profile optimisation, local citation building, and location-specific landing pages. The result: your business appears in local search results when it matters most.'),
                array('title' => 'On-Page SEO Optimisation', 'desc' => 'Every page of your website sends signals to Google. We review and improve titles, meta descriptions, headings, content structure, and internal links so your Manitoba website is fully optimised for the searches your customers are performing.'),
                array('title' => 'Technical SEO Audits', 'desc' => 'Site speed, mobile performance, crawl errors, and indexability all affect your rankings. We identify and fix every technical issue holding your website back, creating a solid foundation for long-term growth.'),
                array('title' => 'Link Building and Authority', 'desc' => 'We earn high-quality backlinks from reputable Canadian and industry-relevant sources. Building domain authority through ethical link building is one of the most reliable ways to rise above competitors on Google.'),
                array('title' => 'Google Business Profile Optimisation', 'desc' => 'Your Google Business Profile is one of your most powerful tools for local visibility. We optimise every section, including categories, descriptions, photos, and service listings, so your Manitoba business appears prominently in Google Maps and local pack results.'),
                array('title' => 'Content Marketing and Blogging', 'desc' => 'Well-written, reader-focused content builds trust and earns rankings. Our content team creates blog posts, service pages, and location content tailored to your Manitoba audience. Every piece is written to inform, engage, and rank.'),
            ),

            'choose_title' => 'Why Choose SEO Service Canada in Manitoba?',
            'choose_items' => array(
                array('title' => 'No Long-Term Contracts', 'desc' => 'You stay because you see results, not because you are locked in.'),
                array('title' => 'Transparent Monthly Reporting', 'desc' => 'You always know exactly what we are doing and what it is achieving.'),
                array('title' => '100% Canadian Focus', 'desc' => 'We understand Manitoba\'s market, consumer behaviour, and regional differences.'),
                array('title' => 'Custom Strategy for Every Client', 'desc' => 'Your SEO plan is built around your business, not a generic template.'),
                array('title' => 'Dedicated Account Manager', 'desc' => 'One point of contact who knows your business and your goals throughout.'),
                array('title' => 'Free SEO Audit', 'desc' => 'Every new client starts with a thorough, no-obligation audit.'),
            ),
            'choose_cta' => 'Get Your Free Manitoba SEO Audit',

            'process_title' => 'Our SEO Process for Manitoba Businesses',
            'process_steps' => array(
                array('title' => 'Free SEO Audit', 'desc' => 'We begin with a comprehensive audit of your website, rankings, and online presence. This gives us a clear picture of where you stand and exactly what needs to improve.'),
                array('title' => 'Custom Strategy', 'desc' => 'We build a tailored SEO strategy aligned with your Manitoba market, your industry, and your specific business goals.'),
                array('title' => 'On-Page and Technical Fixes', 'desc' => 'We implement all on-page improvements and technical corrections quickly and carefully. This forms the clean foundation that all future SEO work builds on.'),
                array('title' => 'Content and Link Building', 'desc' => 'We create high-quality content targeting your key search terms and build authoritative backlinks that grow your domain\'s credibility with Google over time.'),
                array('title' => 'Monthly Reporting', 'desc' => 'Every month you receive a clear, plain-language report showing your ranking progress, traffic growth, and completed work.'),
            ),

            'industries_title' => 'Industries We Serve in Manitoba',
            'industries' => array(
                'Restaurants and Catering Services',
                'Law Firms and Legal Services',
                'Dental Clinics and Orthodontists',
                'Real Estate Agents and Property Managers',
                'E-commerce Stores',
                'Medical Clinics and Healthcare Providers',
                'Home Renovation and Contracting',
                'Auto Repair and Automotive Services',
                'Accounting and Tax Preparation',
                'Gyms and Personal Training Studios',
                'Agriculture and Farm Supply Businesses',
                'Logistics and Transportation Companies',
            ),

            'cities_title' => 'SEO Services Across Manitoba: Cities We Serve',
            'cities_intro' => 'We provide dedicated SEO services throughout Manitoba.',
            'cities' => array(
                'Winnipeg', 'Brandon', 'Steinbach', 'Thompson', 'Portage la Prairie', 'Winkler', 'Selkirk', 'Morden', 'Dauphin', 'Flin Flon', 'The Pas',
            ),

            'faq_title' => 'Frequently Asked Questions: SEO Services in Manitoba',
            'faqs' => array(
                array('q' => 'How long does SEO take in Manitoba?', 'a' => 'Most Manitoba businesses begin seeing solid improvements within three to five months. Because online competition is less intense here than in larger Canadian provinces, results can sometimes arrive faster and hold more easily over time.'),
                array('q' => 'How much do SEO services cost in Manitoba?', 'a' => 'We build custom quotes after your free audit because every business has different needs, goals, and competition levels. There are no hidden fees, and everything is explained in plain language before we begin.'),
                array('q' => 'Do you offer local SEO for small businesses in Manitoba?', 'a' => 'Yes, and small businesses in Manitoba are some of the biggest beneficiaries of local SEO. It is a cost-effective way to compete and win customers in your community, especially when many competitors have not yet invested in it.'),
                array('q' => 'Can you guarantee first page rankings in Manitoba?', 'a' => 'We do not guarantee specific rankings. What we commit to is consistent, ethical SEO work that steadily improves your Manitoba business\'s Google presence over time.'),
                array('q' => 'What makes SEO Service Canada different from other agencies in Manitoba?', 'a' => 'Most Canadian SEO agencies focus their efforts on Toronto and Vancouver. We have dedicated strategies for Manitoba, including Winnipeg and smaller cities across the province. We understand the local market and build around it.'),
            ),

            'cta_title' => 'Ready to Dominate Manitoba Search Results?',
            'cta_text' => 'Manitoba businesses have a genuine first-mover advantage online right now. The companies investing in SEO today will be the ones owning Google\'s first page in Winnipeg, Brandon, and across the province for years ahead.',
            'cta_line' => 'Contact SEO Service Canada today for your FREE Manitoba SEO Audit.',
        ),

        'nova-scotia' => array(
            'name' => 'Nova Scotia',
            'layout' => 'a',
            'accent' => '#0369a1',
            'meta_description' => 'Looking for expert SEO services in Nova Scotia? SEO Service Canada helps Nova Scotia businesses rank higher on Google and drive real results. Get a free audit today.',

            'hero_intro' => 'Nova Scotia is a province with a proud history, a vibrant culture, and a business community that consistently punches above its weight. Halifax is Atlantic Canada\'s economic centre, home to a growing startup scene, established professional services firms, and a thriving hospitality and tourism sector. From the South Shore to Cape Breton, communities across Nova Scotia are filled with businesses serving loyal, local customers.
Many Nova Scotia businesses have not yet fully tapped the opportunity sitting in front of them online. Consumers across the province use Google every day to find local services, and the businesses that show up at the top of those results are capturing the lion\'s share of that demand. SEO Service Canada builds tailored SEO strategies for Nova Scotia businesses of every size and sector. We help you rank higher, attract more local customers, and grow with confidence.',
            'hero_cta' => 'Get Your Free Nova Scotia SEO Audit',

            'why_title' => 'Why SEO Matters for Nova Scotia Businesses',
            'why_paragraphs' => array(
                'Nova Scotia\'s economy is closely connected to its communities. A person in Halifax searching for a restaurant, a law firm, or a home renovation contractor starts that search on Google. Consumers in Dartmouth, Truro, Sydney, and Bridgewater do the same. In every case, the businesses that appear on the first page earn the majority of the clicks and calls.',
                'Mobile search has brought Google even closer to Nova Scotia consumers. Searches for local businesses happen everywhere, often with immediate buying intent. Local SEO puts your business in front of those searches at exactly the right moment.',
                'The competitive online landscape in Nova Scotia is still less saturated than in Ontario or British Columbia. A focused SEO campaign here can move rankings faster and hold them longer. For Nova Scotia businesses, the time to invest is now.',
            ),

            'services_title' => 'Our SEO Services in Nova Scotia',
            'services' => array(
                array('title' => 'Local SEO in Nova Scotia', 'desc' => 'We build local SEO strategies that get your Nova Scotia business in front of customers actively searching nearby. Our work covers Google Business Profile optimisation, local citation building, and location-specific landing pages. The result: your business appears in local search results when it matters most.'),
                array('title' => 'On-Page SEO Optimisation', 'desc' => 'Every page of your website sends signals to Google. We review and improve titles, meta descriptions, headings, content structure, and internal links so your Nova Scotia website is fully optimised for the searches your customers are performing.'),
                array('title' => 'Technical SEO Audits', 'desc' => 'Site speed, mobile performance, crawl errors, and indexability all affect your rankings. We identify and fix every technical issue holding your website back, creating a solid foundation for long-term growth.'),
                array('title' => 'Link Building and Authority', 'desc' => 'We earn high-quality backlinks from reputable Canadian and industry-relevant sources. Building domain authority through ethical link building is one of the most reliable ways to rise above competitors on Google.'),
                array('title' => 'Google Business Profile Optimisation', 'desc' => 'Your Google Business Profile is one of your most powerful tools for local visibility. We optimise every section, including categories, descriptions, photos, and service listings, so your Nova Scotia business appears prominently in Google Maps and local pack results.'),
                array('title' => 'Content Marketing and Blogging', 'desc' => 'Well-written, reader-focused content builds trust and earns rankings. Our content team creates blog posts, service pages, and location content tailored to your Nova Scotia audience. Every piece is written to inform, engage, and rank.'),
            ),

            'choose_title' => 'Why Choose SEO Service Canada in Nova Scotia?',
            'choose_items' => array(
                array('title' => 'No Long-Term Contracts', 'desc' => 'You stay because you see results, not because you are locked in.'),
                array('title' => 'Transparent Monthly Reporting', 'desc' => 'You always know exactly what we are doing and what it is achieving.'),
                array('title' => '100% Canadian Focus', 'desc' => 'We understand Nova Scotia\'s market, consumer behaviour, and regional differences.'),
                array('title' => 'Custom Strategy for Every Client', 'desc' => 'Your SEO plan is built around your business, not a generic template.'),
                array('title' => 'Dedicated Account Manager', 'desc' => 'One point of contact who knows your business and your goals throughout.'),
                array('title' => 'Free SEO Audit', 'desc' => 'Every new client starts with a thorough, no-obligation audit.'),
            ),
            'choose_cta' => 'Get Your Free Nova Scotia SEO Audit',

            'process_title' => 'Our SEO Process for Nova Scotia Businesses',
            'process_steps' => array(
                array('title' => 'Free SEO Audit', 'desc' => 'We begin with a comprehensive audit of your website, rankings, and online presence. This gives us a clear picture of where you stand and exactly what needs to improve.'),
                array('title' => 'Custom Strategy', 'desc' => 'We build a tailored SEO strategy aligned with your Nova Scotia market, your industry, and your specific business goals.'),
                array('title' => 'On-Page and Technical Fixes', 'desc' => 'We implement all on-page improvements and technical corrections quickly and carefully. This forms the clean foundation that all future SEO work builds on.'),
                array('title' => 'Content and Link Building', 'desc' => 'We create high-quality content targeting your key search terms and build authoritative backlinks that grow your domain\'s credibility with Google over time.'),
                array('title' => 'Monthly Reporting', 'desc' => 'Every month you receive a clear, plain-language report showing your ranking progress, traffic growth, and completed work.'),
            ),

            'industries_title' => 'Industries We Serve in Nova Scotia',
            'industries' => array(
                'Tourism and Hospitality',
                'Restaurants and Food Services',
                'Law Firms and Legal Services',
                'Dental Clinics and Healthcare Providers',
                'Real Estate Agents and Developers',
                'Contractors and Renovation Services',
                'Retail Shops and E-commerce',
                'Auto Repair and Dealerships',
                'Accounting and Financial Services',
                'Gyms and Fitness Studios',
                'Fishing and Marine Industry Services',
                'Educational Services and Tutoring',
            ),

            'cities_title' => 'SEO Services Across Nova Scotia: Cities We Serve',
            'cities_intro' => 'We provide dedicated SEO services throughout Nova Scotia.',
            'cities' => array(
                'Halifax', 'Dartmouth', 'Sydney', 'Truro', 'New Glasgow', 'Bridgewater', 'Amherst', 'Yarmouth', 'Antigonish', 'Windsor', 'Wolfville',
            ),

            'faq_title' => 'Frequently Asked Questions: SEO Services in Nova Scotia',
            'faqs' => array(
                array('q' => 'How long does SEO take in Nova Scotia?', 'a' => 'Most Nova Scotia businesses begin seeing meaningful improvements within three to five months. Halifax is more competitive than smaller communities, but the overall SEO landscape in the province allows for relatively fast progress with consistent work.'),
                array('q' => 'How much do SEO services cost in Nova Scotia?', 'a' => 'We build a custom quote after your free audit based on your specific goals, industry, and competitive landscape. There are no surprise fees and no vague estimates.'),
                array('q' => 'Do you offer local SEO for small businesses in Nova Scotia?', 'a' => 'Yes, and small businesses across Nova Scotia benefit greatly from local SEO. It is often the most affordable and effective way to compete for local customers, especially in markets where many competitors are not yet ranking.'),
                array('q' => 'Can you guarantee first page rankings in Nova Scotia?', 'a' => 'No honest SEO agency can guarantee specific rankings, and we will not pretend otherwise. What we do guarantee is consistent, ethical work that moves your Nova Scotia business steadily up the results over time.'),
                array('q' => 'What makes SEO Service Canada different from other agencies in Nova Scotia?', 'a' => 'Most Canadian SEO agencies overlook Atlantic Canada entirely. We have dedicated strategies for Nova Scotia, and we understand its communities, its industries, and its search patterns. That local knowledge makes a real difference.'),
            ),

            'cta_title' => 'Ready to Dominate Nova Scotia Search Results?',
            'cta_text' => 'Nova Scotia businesses have a real opportunity online right now. The competitive landscape is still open, and the businesses that invest in SEO today will be the ones leading Google results in Halifax, Dartmouth, and across the province for years to come.',
            'cta_line' => 'Contact SEO Service Canada today for your FREE Nova Scotia SEO Audit.',
        ),

        'new-brunswick' => array(
            'name' => 'New Brunswick',
            'layout' => 'b',
            'accent' => '#15803d',
            'meta_description' => 'Looking for expert SEO services in New Brunswick? SEO Service Canada helps New Brunswick businesses rank higher on Google and drive real results. Get a free audit today.',

            'hero_intro' => 'New Brunswick is Canada\'s only officially bilingual province, and its business community is as diverse as its character. From the commercial energy of Moncton and the historic business districts of Saint John and Fredericton to the growing communities of Dieppe, Bathurst, and Miramichi, New Brunswick businesses serve a wide range of customers across both English and French-speaking markets.
Most Canadian SEO agencies focus exclusively on Ontario and British Columbia, leaving New Brunswick businesses without the digital support they need to compete. That creates a genuine opening for businesses here to gain first-page Google visibility before competitors catch on. SEO Service Canada fills that gap. We understand New Brunswick\'s bilingual market, its industries, and its communities.',
            'hero_cta' => 'Get Your Free New Brunswick SEO Audit',

            'why_title' => 'Why SEO Matters for New Brunswick Businesses',
            'why_paragraphs' => array(
                'New Brunswick consumers search Google for local services just as actively as consumers in any other Canadian province. A person in Fredericton looking for a trusted plumber or a family in Moncton searching for a dentist starts that search on Google. The business that shows up at the top earns the call.',
                'In a bilingual province, search behaviour is uniquely varied. Some customers search in English, others in French, and a well-built SEO strategy needs to address both. Businesses that cover both language markets have a natural advantage over those that do not.',
                'Online competition in New Brunswick remains relatively low. Businesses that invest in SEO now can move up the rankings faster and hold strong positions with less ongoing effort than in larger provinces.',
            ),

            'services_title' => 'Our SEO Services in New Brunswick',
            'services' => array(
                array('title' => 'Local SEO in New Brunswick', 'desc' => 'We build local SEO strategies that get your New Brunswick business in front of customers actively searching nearby. Our work covers Google Business Profile optimisation, local citation building, and location-specific landing pages. The result: your business appears in local search results when it matters most.'),
                array('title' => 'On-Page SEO Optimisation', 'desc' => 'Every page of your website sends signals to Google. We review and improve titles, meta descriptions, headings, content structure, and internal links so your New Brunswick website is fully optimised for the searches your customers are performing.'),
                array('title' => 'Technical SEO Audits', 'desc' => 'Site speed, mobile performance, crawl errors, and indexability all affect your rankings. We identify and fix every technical issue holding your website back, creating a solid foundation for long-term growth.'),
                array('title' => 'Link Building and Authority', 'desc' => 'We earn high-quality backlinks from reputable Canadian and industry-relevant sources. Building domain authority through ethical link building is one of the most reliable ways to rise above competitors on Google.'),
                array('title' => 'Google Business Profile Optimisation', 'desc' => 'Your Google Business Profile is one of your most powerful tools for local visibility. We optimise every section, including categories, descriptions, photos, and service listings, so your New Brunswick business appears prominently in Google Maps and local pack results.'),
                array('title' => 'Content Marketing and Blogging', 'desc' => 'Well-written, reader-focused content builds trust and earns rankings. Our content team creates blog posts, service pages, and location content tailored to your New Brunswick audience. Every piece is written to inform, engage, and rank.'),
            ),

            'choose_title' => 'Why Choose SEO Service Canada in New Brunswick?',
            'choose_items' => array(
                array('title' => 'No Long-Term Contracts', 'desc' => 'You stay because you see results, not because you are locked in.'),
                array('title' => 'Transparent Monthly Reporting', 'desc' => 'You always know exactly what we are doing and what it is achieving.'),
                array('title' => '100% Canadian Focus', 'desc' => 'We understand New Brunswick\'s market, consumer behaviour, and regional differences.'),
                array('title' => 'Custom Strategy for Every Client', 'desc' => 'Your SEO plan is built around your business, not a generic template.'),
                array('title' => 'Dedicated Account Manager', 'desc' => 'One point of contact who knows your business and your goals throughout.'),
                array('title' => 'Free SEO Audit', 'desc' => 'Every new client starts with a thorough, no-obligation audit.'),
            ),
            'choose_cta' => 'Get Your Free New Brunswick SEO Audit',

            'process_title' => 'Our SEO Process for New Brunswick Businesses',
            'process_steps' => array(
                array('title' => 'Free SEO Audit', 'desc' => 'We begin with a comprehensive audit of your website, rankings, and online presence. This gives us a clear picture of where you stand and exactly what needs to improve.'),
                array('title' => 'Custom Strategy', 'desc' => 'We build a tailored SEO strategy aligned with your New Brunswick market, your industry, and your specific business goals.'),
                array('title' => 'On-Page and Technical Fixes', 'desc' => 'We implement all on-page improvements and technical corrections quickly and carefully. This forms the clean foundation that all future SEO work builds on.'),
                array('title' => 'Content and Link Building', 'desc' => 'We create high-quality content targeting your key search terms and build authoritative backlinks that grow your domain\'s credibility with Google over time.'),
                array('title' => 'Monthly Reporting', 'desc' => 'Every month you receive a clear, plain-language report showing your ranking progress, traffic growth, and completed work.'),
            ),

            'industries_title' => 'Industries We Serve in New Brunswick',
            'industries' => array(
                'Restaurants and Food Services',
                'Law Firms and Legal Services',
                'Dental Clinics and Healthcare Providers',
                'Real Estate Agents and Property Managers',
                'Contractors and Renovation Services',
                'Auto Repair and Dealerships',
                'Accounting and Financial Services',
                'E-commerce Retailers',
                'Gyms and Wellness Centres',
                'Tourism and Hospitality',
                'Forestry and Natural Resource Services',
                'Manufacturing and Industrial Businesses',
            ),

            'cities_title' => 'SEO Services Across New Brunswick: Cities We Serve',
            'cities_intro' => 'We provide dedicated SEO services throughout New Brunswick.',
            'cities' => array(
                'Moncton', 'Saint John', 'Fredericton', 'Dieppe', 'Bathurst', 'Miramichi', 'Riverview', 'Edmundston', 'Campbellton', 'Sussex', 'Sackville',
            ),

            'faq_title' => 'Frequently Asked Questions: SEO Services in New Brunswick',
            'faqs' => array(
                array('q' => 'How long does SEO take in New Brunswick?', 'a' => 'Most New Brunswick businesses start seeing clear improvements within two to four months. The competitive online landscape here is less intense than in larger provinces, so results often come faster and hold more easily.'),
                array('q' => 'How much do SEO services cost in New Brunswick?', 'a' => 'Pricing is custom and built after your free audit. Every business is different, and we make sure the investment matches your goals and your competitive environment. No surprises, no vague estimates.'),
                array('q' => 'Do you offer local SEO for small businesses in New Brunswick?', 'a' => 'Absolutely. Small businesses in New Brunswick have a significant opportunity with local SEO right now. Many local markets are still relatively open, and investing now gives you a head start that is hard for competitors to overcome.'),
                array('q' => 'Can you guarantee first page rankings in New Brunswick?', 'a' => 'We do not make ranking guarantees, and you should be cautious of agencies that do. What we promise is consistent, quality work that moves your rankings upward with every passing month.'),
                array('q' => 'What makes SEO Service Canada different from other agencies in New Brunswick?', 'a' => 'Very few Canadian SEO agencies have dedicated knowledge of New Brunswick\'s bilingual market and its communities. We do. We build strategies that reflect the real search behaviour of New Brunswick consumers, and we back it up with transparent, consistent work.'),
            ),

            'cta_title' => 'Ready to Dominate New Brunswick Search Results?',
            'cta_text' => 'New Brunswick\'s online opportunity is real and available right now. The businesses that invest in SEO today will be the ones dominating Google results in Moncton, Fredericton, Saint John, and across the province for years ahead.',
            'cta_line' => 'Contact SEO Service Canada today for your FREE New Brunswick SEO Audit.',
        ),

        'newfoundland-and-labrador' => array(
            'name' => 'Newfoundland and Labrador',
            'layout' => 'c',
            'accent' => '#0891b2',
            'meta_description' => 'Looking for expert SEO services in Newfoundland and Labrador? SEO Service Canada helps NL businesses rank on Google and drive real results. Get a free audit today.',

            'hero_intro' => 'Newfoundland and Labrador is one of Canada\'s most distinctive provinces, shaped by resilient communities, a diversifying economy, and a business culture built on hard work and loyalty. St. John\'s is the province\'s economic hub, home to a growing range of businesses in energy, professional services, retail, hospitality, and technology. Corner Brook, Gander, and communities across the island and Labrador are equally home to businesses serving dedicated local customers.
What most Newfoundland and Labrador businesses have in common is an online opportunity that has not yet been seized. The digital landscape here is less competitive than in larger Canadian provinces, which means businesses that invest in SEO now can secure strong first-page Google rankings before the space becomes crowded. SEO Service Canada builds custom SEO strategies for NL businesses of all sizes. We help you get found on Google and attract more local customers.',
            'hero_cta' => 'Get Your Free NL SEO Audit',

            'why_title' => 'Why SEO Matters for Newfoundland and Labrador Businesses',
            'why_paragraphs' => array(
                'Consumers across Newfoundland and Labrador use Google every day to find local businesses, services, and products. A person in St. John\'s searching for a financial advisor or a homeowner in Corner Brook looking for a reliable contractor starts on Google. The business on page one earns the call. The business on page three does not.',
                'Mobile search has reached every corner of the province. Smartphones have made Google the default tool for finding local businesses, and searches with local intent carry real buying signals. Without local SEO, your business simply does not show up in those moments.',
                'The competitive online landscape in Newfoundland and Labrador is still relatively open. A focused, well-executed SEO campaign can produce strong first-page results faster here than in most other Canadian provinces. The businesses that move now will own that ground for years.',
            ),

            'services_title' => 'Our SEO Services in Newfoundland and Labrador',
            'services' => array(
                array('title' => 'Local SEO in Newfoundland and Labrador', 'desc' => 'We build local SEO strategies that get your Newfoundland and Labrador business in front of customers actively searching nearby. Our work covers Google Business Profile optimisation, local citation building, and location-specific landing pages. The result: your business appears in local search results when it matters most.'),
                array('title' => 'On-Page SEO Optimisation', 'desc' => 'Every page of your website sends signals to Google. We review and improve titles, meta descriptions, headings, content structure, and internal links so your Newfoundland and Labrador website is fully optimised for the searches your customers are performing.'),
                array('title' => 'Technical SEO Audits', 'desc' => 'Site speed, mobile performance, crawl errors, and indexability all affect your rankings. We identify and fix every technical issue holding your website back, creating a solid foundation for long-term growth.'),
                array('title' => 'Link Building and Authority', 'desc' => 'We earn high-quality backlinks from reputable Canadian and industry-relevant sources. Building domain authority through ethical link building is one of the most reliable ways to rise above competitors on Google.'),
                array('title' => 'Google Business Profile Optimisation', 'desc' => 'Your Google Business Profile is one of your most powerful tools for local visibility. We optimise every section, including categories, descriptions, photos, and service listings, so your Newfoundland and Labrador business appears prominently in Google Maps and local pack results.'),
                array('title' => 'Content Marketing and Blogging', 'desc' => 'Well-written, reader-focused content builds trust and earns rankings. Our content team creates blog posts, service pages, and location content tailored to your Newfoundland and Labrador audience. Every piece is written to inform, engage, and rank.'),
            ),

            'choose_title' => 'Why Choose SEO Service Canada in Newfoundland and Labrador?',
            'choose_items' => array(
                array('title' => 'No Long-Term Contracts', 'desc' => 'You stay because you see results, not because you are locked in.'),
                array('title' => 'Transparent Monthly Reporting', 'desc' => 'You always know exactly what we are doing and what it is achieving.'),
                array('title' => '100% Canadian Focus', 'desc' => 'We understand Newfoundland and Labrador\'s market, consumer behaviour, and regional differences.'),
                array('title' => 'Custom Strategy for Every Client', 'desc' => 'Your SEO plan is built around your business, not a generic template.'),
                array('title' => 'Dedicated Account Manager', 'desc' => 'One point of contact who knows your business and your goals throughout.'),
                array('title' => 'Free SEO Audit', 'desc' => 'Every new client starts with a thorough, no-obligation audit.'),
            ),
            'choose_cta' => 'Get Your Free Newfoundland and Labrador SEO Audit',

            'process_title' => 'Our SEO Process for Newfoundland and Labrador Businesses',
            'process_steps' => array(
                array('title' => 'Free SEO Audit', 'desc' => 'We begin with a comprehensive audit of your website, rankings, and online presence. This gives us a clear picture of where you stand and exactly what needs to improve.'),
                array('title' => 'Custom Strategy', 'desc' => 'We build a tailored SEO strategy aligned with your Newfoundland and Labrador market, your industry, and your specific business goals.'),
                array('title' => 'On-Page and Technical Fixes', 'desc' => 'We implement all on-page improvements and technical corrections quickly and carefully. This forms the clean foundation that all future SEO work builds on.'),
                array('title' => 'Content and Link Building', 'desc' => 'We create high-quality content targeting your key search terms and build authoritative backlinks that grow your domain\'s credibility with Google over time.'),
                array('title' => 'Monthly Reporting', 'desc' => 'Every month you receive a clear, plain-language report showing your ranking progress, traffic growth, and completed work.'),
            ),

            'industries_title' => 'Industries We Serve in Newfoundland and Labrador',
            'industries' => array(
                'Energy and Oil Services',
                'Restaurants and Hospitality',
                'Law Firms and Legal Services',
                'Dental Clinics and Healthcare Providers',
                'Real Estate Agents and Property Managers',
                'Contractors and Builders',
                'Auto Repair and Dealerships',
                'Accounting and Financial Services',
                'Retail and E-commerce',
                'Tourism and Outfitters',
                'Fishing and Marine Industry',
                'Gyms and Fitness Studios',
            ),

            'cities_title' => 'SEO Services Across Newfoundland and Labrador: Cities We Serve',
            'cities_intro' => 'We provide dedicated SEO services throughout Newfoundland and Labrador.',
            'cities' => array(
                'St. John\'s', 'Mount Pearl', 'Corner Brook', 'Conception Bay South', 'Grand Falls-Windsor', 'Gander', 'Happy Valley-Goose Bay', 'Labrador City', 'Marystown', 'Carbonear', 'Stephenville',
            ),

            'faq_title' => 'Frequently Asked Questions: SEO Services in Newfoundland and Labrador',
            'faqs' => array(
                array('q' => 'How long does SEO take in Newfoundland and Labrador?', 'a' => 'Many Newfoundland and Labrador businesses begin seeing solid ranking improvements within two to four months. The competitive landscape online is less intense here than in larger Canadian provinces, which typically means faster results and easier maintenance over time.'),
                array('q' => 'How much do SEO services cost in Newfoundland and Labrador?', 'a' => 'Every business is different, and we build a custom quote after your free audit. You will know exactly what you are investing and what work will be done before we begin.'),
                array('q' => 'Do you offer local SEO for small businesses in Newfoundland and Labrador?', 'a' => 'Yes, absolutely. Small and medium-sized businesses in NL are exactly who local SEO serves best. The competitive opportunity online here is significant, and acting now gives you a real first-mover advantage.'),
                array('q' => 'Can you guarantee first page rankings in Newfoundland and Labrador?', 'a' => 'No honest SEO agency guarantees specific rankings, and we will not make that claim. What we do guarantee is consistent, ethical, results-driven work that moves your business up the rankings month after month.'),
                array('q' => 'What makes SEO Service Canada different from other agencies in Newfoundland and Labrador?', 'a' => 'Most Canadian SEO agencies ignore Atlantic Canada entirely. We have dedicated strategies for Newfoundland and Labrador, and we understand the province\'s communities, industries, and consumer behaviour. That makes a real difference in the results we deliver.'),
            ),

            'cta_title' => 'Ready to Dominate Newfoundland and Labrador Search Results?',
            'cta_text' => 'Newfoundland and Labrador businesses have one of the best first-mover opportunities in Canadian SEO right now. The businesses that invest today will own Google\'s first page in St. John\'s, Corner Brook, and across the province for years to come.',
            'cta_line' => 'Contact SEO Service Canada today for your FREE Newfoundland and Labrador SEO Audit.',
        ),

        'prince-edward-island' => array(
            'name' => 'Prince Edward Island',
            'layout' => 'a',
            'accent' => '#dc2626',
            'meta_description' => 'Looking for expert SEO services in Prince Edward Island? SEO Service Canada helps PEI businesses rank higher on Google and drive real results. Get a free audit today.',

            'hero_intro' => 'Prince Edward Island may be Canada\'s smallest province, but it has one of the most loyal and community-driven business cultures in the country. Charlottetown, Summerside, and the many towns and communities scattered across PEI are home to businesses that rely on local customers, seasonal visitors, and an increasingly digital consumer base.
The playing field online in PEI is remarkably open. The province\'s relatively small population means competition for Google\'s first page in most local markets is lower than almost anywhere else in Canada. For PEI businesses, that means faster results and a genuine opportunity to dominate local search results with a well-built SEO strategy. SEO Service Canada builds tailored strategies for Prince Edward Island businesses of all sizes, serving both year-round residents and seasonal tourism traffic.',
            'hero_cta' => 'Get Your Free PEI SEO Audit',

            'why_title' => 'Why SEO Matters for Prince Edward Island Businesses',
            'why_paragraphs' => array(
                'Prince Edward Island attracts hundreds of thousands of visitors each year, and those visitors search Google for local restaurants, tours, accommodations, and services before and during their trips. For tourism-related businesses, SEO is not just a nice-to-have. It is one of the most important marketing investments you can make.',
                'Year-round residents of PEI are equally dependent on Google for local search. A person looking for a dentist in Charlottetown, a plumber in Summerside, or a financial advisor in Stratford turns to Google first. If your business is not on the first page, a large share of those potential customers will call someone else.',
                'PEI\'s competitive online landscape is still very open. Most PEI businesses have not yet invested in serious SEO, which means the businesses that do move now will enjoy strong first-page positions with relatively little competition.',
            ),

            'services_title' => 'Our SEO Services in Prince Edward Island',
            'services' => array(
                array('title' => 'Local SEO in Prince Edward Island', 'desc' => 'We build local SEO strategies that get your Prince Edward Island business in front of customers actively searching nearby. Our work covers Google Business Profile optimisation, local citation building, and location-specific landing pages. The result: your business appears in local search results when it matters most.'),
                array('title' => 'On-Page SEO Optimisation', 'desc' => 'Every page of your website sends signals to Google. We review and improve titles, meta descriptions, headings, content structure, and internal links so your Prince Edward Island website is fully optimised for the searches your customers are performing.'),
                array('title' => 'Technical SEO Audits', 'desc' => 'Site speed, mobile performance, crawl errors, and indexability all affect your rankings. We identify and fix every technical issue holding your website back, creating a solid foundation for long-term growth.'),
                array('title' => 'Link Building and Authority', 'desc' => 'We earn high-quality backlinks from reputable Canadian and industry-relevant sources. Building domain authority through ethical link building is one of the most reliable ways to rise above competitors on Google.'),
                array('title' => 'Google Business Profile Optimisation', 'desc' => 'Your Google Business Profile is one of your most powerful tools for local visibility. We optimise every section, including categories, descriptions, photos, and service listings, so your Prince Edward Island business appears prominently in Google Maps and local pack results.'),
                array('title' => 'Content Marketing and Blogging', 'desc' => 'Well-written, reader-focused content builds trust and earns rankings. Our content team creates blog posts, service pages, and location content tailored to your Prince Edward Island audience. Every piece is written to inform, engage, and rank.'),
            ),

            'choose_title' => 'Why Choose SEO Service Canada in Prince Edward Island?',
            'choose_items' => array(
                array('title' => 'No Long-Term Contracts', 'desc' => 'You stay because you see results, not because you are locked in.'),
                array('title' => 'Transparent Monthly Reporting', 'desc' => 'You always know exactly what we are doing and what it is achieving.'),
                array('title' => '100% Canadian Focus', 'desc' => 'We understand Prince Edward Island\'s market, consumer behaviour, and regional differences.'),
                array('title' => 'Custom Strategy for Every Client', 'desc' => 'Your SEO plan is built around your business, not a generic template.'),
                array('title' => 'Dedicated Account Manager', 'desc' => 'One point of contact who knows your business and your goals throughout.'),
                array('title' => 'Free SEO Audit', 'desc' => 'Every new client starts with a thorough, no-obligation audit.'),
            ),
            'choose_cta' => 'Get Your Free Prince Edward Island SEO Audit',

            'process_title' => 'Our SEO Process for Prince Edward Island Businesses',
            'process_steps' => array(
                array('title' => 'Free SEO Audit', 'desc' => 'We begin with a comprehensive audit of your website, rankings, and online presence. This gives us a clear picture of where you stand and exactly what needs to improve.'),
                array('title' => 'Custom Strategy', 'desc' => 'We build a tailored SEO strategy aligned with your Prince Edward Island market, your industry, and your specific business goals.'),
                array('title' => 'On-Page and Technical Fixes', 'desc' => 'We implement all on-page improvements and technical corrections quickly and carefully. This forms the clean foundation that all future SEO work builds on.'),
                array('title' => 'Content and Link Building', 'desc' => 'We create high-quality content targeting your key search terms and build authoritative backlinks that grow your domain\'s credibility with Google over time.'),
                array('title' => 'Monthly Reporting', 'desc' => 'Every month you receive a clear, plain-language report showing your ranking progress, traffic growth, and completed work.'),
            ),

            'industries_title' => 'Industries We Serve in Prince Edward Island',
            'industries' => array(
                'Tourism and Hospitality',
                'Restaurants and Cafes',
                'Bed and Breakfasts and Accommodations',
                'Law Firms and Legal Services',
                'Dental Clinics and Healthcare Providers',
                'Real Estate Agents',
                'Contractors and Renovation Services',
                'Auto Repair and Automotive Services',
                'Accounting and Tax Services',
                'Retail and E-commerce',
                'Agriculture and Farm Markets',
                'Gyms and Wellness Studios',
            ),

            'cities_title' => 'SEO Services Across Prince Edward Island: Cities We Serve',
            'cities_intro' => 'We provide dedicated SEO services throughout Prince Edward Island.',
            'cities' => array(
                'Charlottetown', 'Summerside', 'Stratford', 'Cornwall', 'Montague', 'Kensington', 'Souris', 'Alberton', 'O\'Leary', 'Georgetown',
            ),

            'faq_title' => 'Frequently Asked Questions: SEO Services in Prince Edward Island',
            'faqs' => array(
                array('q' => 'How long does SEO take in Prince Edward Island?', 'a' => 'PEI businesses often see meaningful results within two to three months because the competitive online landscape is less crowded than in most Canadian provinces. Results come quickly and are relatively straightforward to maintain with consistent effort.'),
                array('q' => 'How much do SEO services cost in Prince Edward Island?', 'a' => 'We build custom pricing after your free audit because every business has different needs. You will know exactly what is included and what it costs before any work begins.'),
                array('q' => 'Do you offer local SEO for small businesses in Prince Edward Island?', 'a' => 'Yes, and small PEI businesses have one of the best opportunities in Canada right now. Local SEO here is highly effective because competition is low and the potential to own the first page in your market is very achievable.'),
                array('q' => 'Can you guarantee first page rankings in Prince Edward Island?', 'a' => 'We do not make specific ranking guarantees, and we would encourage you to be cautious of agencies that do. What we guarantee is consistent, ethical work that moves your PEI business steadily up Google\'s results over time.'),
                array('q' => 'What makes SEO Service Canada different from other agencies in Prince Edward Island?', 'a' => 'Most Canadian SEO agencies have no presence or strategy for PEI. We do. We understand the province\'s seasonal dynamics, its tourism-driven search patterns, and its year-round local market. That knowledge shapes every strategy we build for Island businesses.'),
            ),

            'cta_title' => 'Ready to Dominate Prince Edward Island Search Results?',
            'cta_text' => 'Prince Edward Island offers one of the clearest SEO opportunities in Canada. The businesses that invest in local search visibility now will own the first page in Charlottetown, Summerside, and across the Island for years to come, well ahead of any competitors who delay.',
            'cta_line' => 'Contact SEO Service Canada today for your FREE Prince Edward Island SEO Audit.',
        ),

    );

    return isset($provinces[$key]) ? $provinces[$key] : null;
}

function ssc_get_all_province_keys() {
    return array('ontario', 'british-columbia', 'alberta', 'quebec', 'saskatchewan', 'manitoba', 'nova-scotia', 'new-brunswick', 'newfoundland-and-labrador', 'prince-edward-island');
}
