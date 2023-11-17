<?php

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('blogs')->delete();
        
        \DB::table('blogs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Shipping remains off target in bid to resolve the zero-carbon conundrum',
                'date' => '2023-11-09',
                'by'=>"Lloyd's List",
                'text_blog' => '<p>Shipping remains only partially on track to reach its near term ambitions and industry executives remain deeply concerned about the lack of available fuels</p>
                <p>THE shipping industry is not moving fast enough towards zero-carbon ships or fuels to meet current targets, risking further regulation and a more costly transition as a result.</p>
                <p>According to an annual study which assesses the industry&rsquo;s progress towards the milestone target of at least 5% scalable zero emission fuel being used by 2030, the industry remains off track across a series of crucial metrics.</p>
                <p>Despite significant progress at the regulatory level within the&nbsp;<a class="click-utag" href="https://www.seasearcher.com/company/53333/overview" target="_blank" rel="noopener noreferrer">International Maritime Organization</a>, which successfully revised carbon reduction targets for 2050 in July this year, industry demand signals and scaling of fuel projects have not kept pace with the scale of regulatory ambition.</p>',
                'image' => '1700144779blog1.png',
                'alt_image' => 'Alt Image',
                'title1'=>'Sustainability',
                'title2'=>'Environment',
                'title3'=>'Political and Trade',
                'title4'=>NULL,
                'title5'=>NULL,
                'title6'=>NULL,
                'title7'=>NULL,
                'title8'=>NULL,
                'meta_title' => 'Meta title',
                'meta_description' => '<p>Meta Description</p>',
                'meta_keywords' => '<p>Meta keywords</p>',
                'og_image' => '16995459811698146702.png',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => "Asia-North Europe rates sinking again as GRIs 'run out of steam",
                'date' => '2023-09-01',
                'by'=>"The Load Star",
                'text_blog' => '<div class="mt-5 container">
                <p>Ocean carriers are giving back their recent Asia-North Europe FAK rate increases via heavy discounts for October shipments from China.</p>
                <p>Indeed, shippers are receiving rate offers from major carriers, valid until 15 October, from China to Antwerp, Rotterdam and Hamburg at less than $1,000 per 40ft &ndash; with rates for UK ports further discounted.</p>
                </div>
                <div class="container my-5">
                <div id="" class="">
                <div id="v-pills-t2" class="tab-pane fade active show" role="tabpanel" aria-labelledby="v-pills-t2-tab">
                <div class="row">
                <div class="col-lg-12 align-self-center">
                <div class="about-right">
                <p>The container spot rate indices appear to be behind the curve on the rate erosion, albeit Xeneta&rsquo;s XSI Asia-North Europe component slipped 7% this week, to an average of $1,585 per 40ft.</p>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                <div class="container my-5">
                <div id="" class="">
                <div id="v-pills-t2" class="tab-pane fade active show" role="tabpanel" aria-labelledby="v-pills-t2-tab">
                <div class="row">
                <div class="col-lg-12 align-self-center">
                <div class="about-right">
                <p>With a prediction that the rate increases on the tradelane would &ldquo;relatively quickly run out of steam&rdquo;, the August edition of MSI&rsquo;s <em>Horizon</em> report cites the &ldquo;gargantuan supply influx&rdquo; of newbuild ultra-large container vessels being phased into service loops as the principal cause.</p>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>',
                'image' => '1700144835blog2.png',
                'alt_image' => 'Alt Image',
                'title1'=>'Asia-North Europe',
                'title2'=>'Environment',
                'title3'=>'China',
                'title4'=>'maritime',
                'title5'=>NULL,
                'title6'=>NULL,
                'title7'=>NULL,
                'title8'=>NULL,
                'meta_title' => 'Meta title',
                'meta_description' => '<p>Meta Description</p>',
                'meta_keywords' => '<p>Meta keywords</p>',
                'og_image' => '700134717blog2.png',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => "Containerised batteries a major maritime innovation: AYK Energy",
                'date' => '2023-08-27',
                'by'=>"SeatradeMaritime",
                'text_blog' => '<div class="mt-5 container">
                <p>Containerised batteries are set to be a major innovation for shipping according to marine battery manufacturer AYK Energy as it plans to expand production at new factory in China.</p>
                </div>
                <div class="container my-5">
                <div id="" class="">
                <div id="v-pills-t2" class="tab-pane fade active show" role="tabpanel" aria-labelledby="v-pills-t2-tab">
                <div class="row">
                <div class="col-lg-12 align-self-center">
                <div class="about-right">
                <h4>AYK Energy is aiming to become the world&rsquo;s leading manufacturer of marine batteries with a new 5,000 sq m factory in Zhuhai, China.</h4>
                <p>AYK Energy founder Chris Kruger, said: The new AYK Energy factory will seriously disrupt the marine battery market. From here we can build the highest quality, safest and lowest cost class approved batteries in the world.&nbsp; Our team is drawing on all our experience of working on marine batteries for 15 years, including pioneering the first ever marine type-approved battery.&rdquo;</p>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>',
                'image' => '1700144861blog3.jpeg',
                'alt_image' => 'Alt Image',
                'title1'=>'Asia',
                'title2'=>'MARINE BATTERIES',
                'title3'=>NULL,
                'title4'=>NULL,
                'title5'=>NULL,
                'title6'=>NULL,
                'title7'=>NULL,
                'title8'=>NULL,
                'meta_title' => 'Meta title',
                'meta_description' => '<p>Meta Description</p>',
                'meta_keywords' => '<p>Meta keywords</p>',
                'og_image' => '1700134805blog3.jpeg',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),

            3 => 
            array (
                'id' => 4,
                'title' => "Let’s change the conversation around mental health at sea",
                'date' => '2023-06-26',
                'by'=>"SeatradeMaritime",
                'text_blog' => '<div class="mt-5 container">
                <p>For the more than 1.9 million people worldwide who work at sea, it is not uncommon to experience mental health challenges.</p>
                </div>
                <div class="container my-5">
                <div id="" class="">
                <div id="v-pills-t2" class="tab-pane fade active show" role="tabpanel" aria-labelledby="v-pills-t2-tab">
                <div class="row">
                <div class="col-lg-12 align-self-center">
                <div class="about-right">
                <p>However, right now there&rsquo;s a huge opportunity for the maritime industry to change how it views and addresses mental health at sea.</p>
                <p><span style="color: #000000; font-family: open sans, Verdana, sans-serif;">https://www.seatrade-maritime.com/opinions-analysis/lets-change-conversation-around-mental-health-sea</span></p>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>',
                'image' => '1700145072blog23.webp',
                'alt_image' => 'Alt Image',
                'title1'=>'Crewing',
                'title2'=>'Management and Crewing',
                'title3'=>'Mental Health',
                'title4'=>NULL,
                'title5'=>NULL,
                'title6'=>NULL,
                'title7'=>NULL,
                'title8'=>NULL,
                'meta_title' => 'Meta title',
                'meta_description' => '<p>Meta Description</p>',
                'meta_keywords' => '<p>Meta keywords</p>',
                'og_image' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),

            4 => 
            array (
                'id' => 5,
                'title' => "Price the biggest challenge in adoption of alternative fuels: Eaglestar",
                'date' => '2023-05-29',
                'by'=>"SeatradeMaritime",
                'text_blog' => '<div class="mt-5 container">
                <p>he pricing difference to conventional fuels is the biggest challenge facing the adoption of greener fuels by shipping companies, according to the chief of MISC&rsquo;s shipmanagement company Eaglestar.</p>
                </div>
                <div class="container my-5">
                <div id="" class="">
                <div id="v-pills-t2" class="tab-pane fade active show" role="tabpanel" aria-labelledby="v-pills-t2-tab">
                <div class="row">
                <div class="col-lg-12 align-self-center">
                <div class="about-right">
                <p>Eaglestar has been one of the frontrunners in operating LNG dual-fuel tankers for MISC tanker company AET.</p>
                <p>Speaking to&nbsp;<em>Seatrade Maritime News</em>&nbsp;at the Langkawi International Maritime &amp; Aviation exhibition, Capt Peter Liew, Managing Director/CEO of Eaglestar, noted the technology for LNG-fuelled ships had been around many years with LNG carriers using it as a fuel as well as carrying it as a cargo.</p>
                <p><span style="color: #222222; font-family: open sans, Verdana, sans-serif;"><a href="https://www.seatrade-maritime.com/sustainability-green-technology/price-biggest-challenge-adoption-alternative-fuels-eaglestar">https://www.seatrade-maritime.com/sustainability-green-technology/price-biggest-challenge-adoption-alternative-fuels-eaglestar</a></span></p>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>',
                'image' => '1700145094blog4.jpeg',
                'alt_image' => 'Alt Image',
                'title1'=>'Ship Operations',
                'title2'=>'Management & Crewing',
                'title3'=>'Asia',
                'title4'=>'LNG',
                'title5'=>'Ammonia',
                'title6'=>'Methanol',
                'title7'=>NULL,
                'title8'=>NULL,
                'meta_title' => 'Meta title',
                'meta_description' => '<p>Meta Description</p>',
                'meta_keywords' => '<p>Meta keywords</p>',
                'og_image' => '1700142778blog4.jpeg',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => "Air cargo shreds paper trail in industry push toward digitalization",
                'date' => '2023-04-25',
                'by'=>"Kelly Stroh | Supply Chain Dive",
                'text_blog' => '<div class="mt-5 container">
                <p>Carriers are working to modernize operations. Electronic air waybills are just the first step.</p>
                </div>
                <div class="container my-5">
                <div id="" class="">
                <div id="v-pills-t2" class="tab-pane fade active show" role="tabpanel" aria-labelledby="v-pills-t2-tab">
                <div class="row">
                <div class="col-lg-12 align-self-center">
                <div class="about-right">
                <p>Below article from supplychaindive.com</p>
                <p>Air cargo carriers are pushing customers to use electronic air waybills, which experts say are key to improving processes, increasing shipment visibility and eliminating errors.</p>
                <p>Earlier this year, for instance, IAG Cargo implemented a charging fee for using paper AWBs as the company strives to digitize its operations and procedures.</p>
                <p>The eAWB has been available for more than 10 years. But the air cargo industry at large has lagged in shipping document digitization, Chief Transformation Officer David Rose told Supply Chain Dive.</p>
                <p>&ldquo;Air cargo has historically relied heavily on paper processes for the contract of carriage between freight forwarders and airlines, and our customers &hellip; are likely accustomed to it,&rdquo; Rose said.</p>
                <p>The carrier hopes to achieve full eAWB adoption from its customers by the end of the year. Fewer than half of IAG Cargo&rsquo;s customers currently use the digital option.</p>
                <p>&ldquo;We want to change that,&rdquo; Rose said.</p>
                <p>Click on the link to read the full article:&nbsp;<a href="https://www.supplychaindive.com/news/air-cargo-shreds-paper-trail-industry-digitalization-electronic-air-waybills/647966/" target="_blank" rel="noopener">https://www.supplychaindive.com/news/air-cargo-shreds-paper-trail-industry-digitalization-electronic-air-waybills/647966/</a></p>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>',
                'image' => '1700145110blog5.jpeg',
                'alt_image' => 'Alt Image',
                'title1'=>'Air cargo',
                'title2'=>'Logistics',
                'title3'=>NULL,
                'title4'=>NULL,
                'title5'=>NULL,
                'title6'=>NULL,
                'title7'=>NULL,
                'title8'=>NULL,
                'meta_title' => 'Meta title',
                'meta_description' => '<p>Meta Description</p>',
                'meta_keywords' => '<p>Meta keywords</p>',
                'og_image' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),

            6 => 
            array (
                'id' => 7,
                'title' => "Seasonality is a thing of the past, port executive say",
                'date' => '2023-03-29',
                'by'=>"Alejandra Salgado | Supply Chain Dive",
                'text_blog' => '<div class="mt-5 container">
                <p>Despite a four-month streak as the nation&rsquo;s busiest containerport, the Port of New York and New Jersey saw volumes decline YoY in December.</p>
                </div>
                <div class="container my-5">
                <div id="" class="">
                <div id="v-pills-t2" class="tab-pane fade active show" role="tabpanel" aria-labelledby="v-pills-t2-tab">
                <div class="row">
                <div class="col-lg-12 align-self-center">
                <div class="about-right">
                <p>Volatile demand trends over the past few years have made forecasting ocean shipping cargo volumes more difficult, according to the head of the Port Authority of New York and New Jersey. &nbsp;&ldquo;There is no longer any seasonality or predictability to the cargo peaks and valleys that our industry had become accustomed to,&rdquo; port director Beth Rooney said in a State of the Port briefing on Jan. 25. &nbsp;Cargo volumes, which soared at many ports over the past few years, are now being met with softening demand. The trend comes as retailers pull back orders to clear inventories and the warehouse market shows signs of cooling due to demand slowdown.</p>
                <p>Click on the link to read the full article:&nbsp;<a href="https://www.supplychaindive.com/news/port-of-new-york-and-new-jersey-sees-historic-record-volumes/641363/" target="_blank" rel="noopener">https://www.supplychaindive.com/news/port-of-new-york-and-new-jersey-sees-historic-record-volumes/641363/</a></p>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>',
                'image' => '1700145133blog6.jpeg',
                'alt_image' => 'Alt Image',
                'title1'=>'Supply Chain',
                'title2'=>'Transportation',
                'title3'=>'Logistics',
                'title4'=>'Business',
                'title5'=>'Ocean Freight',
                'title6'=>'Port',
                'title7'=>'Season',
                'title8'=>NULL,
                'meta_title' => 'Meta title',
                'meta_description' => '<p>Meta Description</p>',
                'meta_keywords' => '<p>Meta keywords</p>',
                'og_image' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => "How to improve supply chain sustainability",
                'date' => '2023-01-23',
                'by'=>"Milliken | Performance Solutions | Supply Chain Dive",
                'text_blog' => '<div class="mt-5 container">
                <p>Capturing the full environmental, social, and financial benefits of corporate sustainability requires a focus well beyond the four walls of your facilities.</p>
                </div>
                <div class="container my-5">
                <div id="" class="">
                <div id="v-pills-t2" class="tab-pane fade active show" role="tabpanel" aria-labelledby="v-pills-t2-tab">
                <div class="row">
                <div class="col-lg-12 align-self-center">
                <div class="about-right">
                <p>Capturing the full environmental, social, and financial benefits of corporate sustainability requires a focus well beyond the four walls of your facilities.</p>
                <p>Why? Because manufacturers and supply chain leaders rely on hundreds or thousands of suppliers for:</p>
                <ul>
                <li>Components and materials</li>
                <li>Product packaging</li>
                <li>Maintenance, repair and operations inventory</li>
                <li>Technology solutions</li>
                <li>Transportation and logistics</li>
                </ul>
                <p>Unfortunately, it takes only a single supplier&rsquo;s environmental failure to tarnish your brand. Just as important, suppliers with a focus on sustainability can make themselves more competitive &mdash; and improve your bottom line, too.</p>
                <p>In fact, a recent CDP study found that 95 percent of organizations report that suppliers demonstrating environmental leadership in sustainable practices are more competitive; only 5 percent say these suppliers are more costly. In addition, 65 percent of CDP members &mdash; with a combined procurement spend of $3.6 trillion and more than 7,000 suppliers &mdash; report using environmental metrics in their supplier relationship management processes, with another 30 percent planning to do so within two years.</p>
                <p><br>Click on the link to read the full article:&nbsp;<a href="https://www.supplychaindive.com/spons/how-to-improve-supply-chain-sustainability/639742/" target="_blank" rel="noopener">https://www.supplychaindive.com/spons/how-to-improve-supply-chain-sustainability/639742/</a></p>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>',
                'image' => '1700145158blog7.png',
                'alt_image' => 'Alt Image',
                'title1'=>'Supply Chain',
                'title2'=>'Transportation',
                'title3'=>'Logistics',
                'title4'=>'Business',
                'title5'=>'Ocean Freight',
                'title6'=>NULL,
                'title7'=>NULL,
                'title8'=>NULL,
                'meta_title' => 'Meta title',
                'meta_description' => '<p>Meta Description</p>',
                'meta_keywords' => '<p>Meta keywords</p>',
                'og_image' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            8 => 
            array (
                'id' => 9,
                'title' => "Victoria’s Secret moves freight from air to ocean in bid to save costs",
                'date' => '2022-12-14',
                'by'=>"Kelly Stroh | Supply Chain Dive",
                'text_blog' => '<div class="mt-5 container">
                <p>Victoria&rsquo;s Secret has been moving shipments away from air in favor of ocean transport as freight rates stabilize, Chief Finance and Administrative Officer Tim Johnson said on a Dec. 1 earnings call.</p>
                </div>
                <div class="container my-5">
                <div id="" class="">
                <div id="v-pills-t2" class="tab-pane fade active show" role="tabpanel" aria-labelledby="v-pills-t2-tab">
                <div class="row">
                <div class="col-lg-12 align-self-center">
                <div class="about-right">
                <h4>Dive Brief:</h4>
                <p>Victoria&rsquo;s Secret has been moving shipments away from air in favor of ocean transport as freight rates stabilize, Chief Finance and Administrative Officer Tim Johnson said on a Dec. 1 earnings call.</p>
                <p>The retailer expects the modal shift to help abate burgeoning costs. The company had seen supply chain costs rise by roughly $300 million last holiday season due in part to a reliance on air freight. Now, the company expects closer to $100 million in incremental supply chain costs from fall 2022 to spring 2023.</p>
                <p>&ldquo;As we move into 2022 and [the] supply chain started to get incrementally better from a flow perspective, it gave us the confidence that we could start taking merchandise off of airplanes and start putting it on boats,&rdquo; Johnson told analysts.</p>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                <div class="container my-5">
                <div id="" class="">
                <div id="v-pills-t2" class="tab-pane fade active show" role="tabpanel" aria-labelledby="v-pills-t2-tab">
                <div class="row">
                <div class="col-lg-12 align-self-center">
                <div class="about-right">
                <h4>Dive Insight:</h4>
                <p>During Q3 last year, Victoria&rsquo;s Secret was nearly entirely dependent on transporting merchandise via airfreight, especially during the holiday season. At the time, the company had ordered 200 million units of stock for the fall season, 45% of which were delayed between 2 to 9 weeks, CEO Martin Waters told investors during a Q3 2021 earnings call.</p>
                <p>&ldquo;In some cases, we won&rsquo;t get the merchandise at all. So, all of our plans are being reworked, [and] 90% of our merchandise will come in by air,&rdquo; Waters said during the call. &ldquo;In addition to that we have 100 vessels at anchor right now that are not coming to shore.&rdquo;</p>
                <p>At the time, rising ocean and air rates as well as higher raw materials prices led the retailer to forecast higher supply chain YoY expenses, the CFO shared.</p>
                <p>Since then, ocean and air rates have normalized compared to last year&rsquo;s high cost environment. Transpacific spot rates in November were down 32% YoY for air cargo, and 79% YoY for ocean shipments, according to Xeneta&rsquo;s Clive Data Services.</p>
                <p>Now, Victoria&rsquo;s Secret joins the list of retailers optimistic about margins as freight costs continue to soften going into 2023. Gap also saw improved margins in Q3 as air freight rates normalized YoY spending levels.</p>
                <p>&ldquo;When we think about the margin &hellip; we do expect to have some tailwind as we go into spring season, particularly around freight rates and freight opportunity year over year,&rdquo; Johnson told analysts.<br><br>Click on the link to read the full article:&nbsp;<a href="http://www.supplychaindive.com/news/victorias-secret-modal-shifts-drive-freight-savings-q3/638261/" target="_blank" rel="noopener">www.supplychaindive.com/news/victorias-secret-modal-shifts-drive-freight-savings-q3/638261/</a></p>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>',
                'image' => '1700145221blog8.png',
                'alt_image' => 'Alt Image',
                'title1'=>'Supply Chain',
                'title2'=>'Transportation',
                'title3'=>'Logistics',
                'title4'=>'Business',
                'title5'=>'Ocean Freight',
                'title6'=>NULL,
                'title7'=>NULL,
                'title8'=>NULL,
                'meta_title' => 'Meta title',
                'meta_description' => '<p>Meta Description</p>',
                'meta_keywords' => '<p>Meta keywords</p>',
                'og_image' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),

            9 => 
            array (
                'id' => 10,
                'title' => "What should ocean shippers expect this peak season? Experts weigh in.",
                'date' => '2022-11-16',
                'by'=>"Alejandra Salgado | Supply Chain Dive",
                'text_blog' => '<div class="mt-5 container">
                <p>Four maritime shipping observers share their thoughts on what&rsquo;s changing in the logistics environment as demand and inventory trends shift.</p>
                </div>
                <div class="container my-5">
                <div id="" class="">
                <div id="v-pills-t2" class="tab-pane fade active show" role="tabpanel" aria-labelledby="v-pills-t2-tab">
                <div class="row">
                <div class="col-lg-12 align-self-center">
                <div class="about-right">
                <p>The peak holiday season will not be the same as previous years, according to various experts.<br><br>Retailers this year are working to clear out inventory piles as demand softens in Q4. Ocean carriers are blanking more sailings. Congestion at ports has shifted away from the West Coast to other areas of the United States. Meanwhile, shippers are keeping an eye on labor negotiations as they craft their logistics strategies.</p>
                <p>To get a better pulse on the logistics environment, we asked four experts: What&rsquo;s in store for ocean shippers and carriers this holiday season, particularly as congestion and inventory trends shift?</p>
                <p>Some answers have been edited for length and clarity.<br><br>Click on the link to read the full article:&nbsp;<a href="https://www.supplychaindive.com/news/ocean-shipping-for-the-holidays-and-peak-season/635869/" target="_blank" rel="noopener">www.supplychaindive.com/news/ocean-shipping-for-the-holidays-and-peak-season/635869/</a></p>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>',
                'image' => '1700145253blog9.png',
                'alt_image' => 'Alt Image',
                'title1'=>'Ocean',
                'title2'=>'Supply Chain',
                'title3'=>'Transportation',
                'title4'=>'Operations',
                'title5'=>'Shipper',
                'title6'=>'Shipping',
                'title7'=>'Peak Season',
                'title8'=>NULL,
                'meta_title' => 'Meta title',
                'meta_description' => '<p>Meta Description</p>',
                'meta_keywords' => '<p>Meta keywords</p>',
                'og_image' => '',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            10 => 
            array (
                'id' => 11,
                'title' => "How digitally transforming your business will revolutionize your operations",
                'date' => '2022-10-19',
                'by'=>"Qualcomm | Supply Chain Dive",
                'text_blog' => '<div class="mt-5 container">
                <p>Article from SupplyChainDive.com titled: How digitally transforming your business will revolutionize your operations</p>
                </div>
                <div class="container my-5">
                <div id="" class="">
                <div id="v-pills-t2" class="tab-pane fade active show" role="tabpanel" aria-labelledby="v-pills-t2-tab">
                <div class="row">
                <div class="col-lg-12 align-self-center">
                <div class="about-right">
                <h4>Industry 4.0 is here</h4>
                <p>The age of digital transformation is disrupting how we live, work and play in today&rsquo;s global economy.<br>For the supply chain ecosystem, this disruption is ushering in &ldquo;Industry 4.0&rdquo; through increased connectivity and smart technology that enable innovative operations. Everything from &ldquo;factories of the future,&rdquo; advanced transportation and logistics to extremely precise asset tracking, asset management and smart warehouses is made possible by wirelessly connecting almost anything, collecting massive amounts of data from those connected devices and then analyzing that data for real-time insights.<br>Digital transformation allows organizations to maximize their operational efficiencies and ultimately, save time and money.</p>
                <p>Even with these potential benefits, over half of all organizations &ldquo;have not actively started to build a roadmap for supply chain digital transformation.&rdquo; (Source: 2020 Gartner) At Qualcomm Technologies, Inc. (QTI), we see this as a missed opportunity to realize both short-term and long-term gains to help businesses stay relevant, efficient and profitable.</p>
                <p>But knowing where to start digitally transforming can feel overwhelming. So, here&rsquo;s a breakdown of how we are helping businesses across the supply chain industry take part in the digital revolution.<br><br>Click on the link to read the full article:&nbsp;<a href="https://www.supplychaindive.com/spons/how-digitally-transforming-your-business-will-revolutionize-your-operations/633659/" target="_blank" rel="noopener">https://www.supplychaindive.com/spons/how-digitally-transforming-your-business-will-revolutionize-your-operations/633659/</a></p>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>',
                'image' => '1700145270blog10.png',
                'alt_image' => 'Alt Image',
                'title1'=>'Digital',
                'title2'=>'Transformation',
                'title3'=>'Supply Chain',
                'title4'=>'Logistics',
                'title5'=>'Operations',
                'title6'=>'Business',
                'title7'=>NULL,
                'title8'=>NULL,
                'meta_title' => 'Meta title',
                'meta_description' => '<p>Meta Description</p>',
                'meta_keywords' => '<p>Meta keywords</p>',
                'og_image' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),

            11 => 
            array (
                'id' => 12,
                'title' => "Air cargo volumes continue dip, but ‘seller’s market’ may soon return",
                'date' => '2022-09-21',
                'by'=>"Max Garland Reporter | Supply Chain Dive",
                'text_blog' => '<div class="mt-5 container">
                <p>Article from SupplyChainDive.com titled: Air cargo volumes continue dip, but &lsquo;seller&rsquo;s market&rsquo; may soon return</p>
                </div>
                <div class="container my-5">
                <div id="" class="">
                <div id="v-pills-t2" class="tab-pane fade active show" role="tabpanel" aria-labelledby="v-pills-t2-tab">
                <div class="row">
                <div class="col-lg-12 align-self-center">
                <div class="about-right">
                <h4>The air cargo market has shifted in shippers&rsquo; favor the past few months after they endured two years of capacity constraints and climbing rates sparked by the COVID-19 pandemic.</h4>
                <p>A boost in international flights to keep up with summer travel demand helped August air cargo capacity grow 7% YoY, according to Clive. Now, global capacity is just 9% away from recovering to 2019 levels.</p>
                <p>At the same time, airlines are facing a tepid cargo demand environment compared to 2021. Inflationary pressures, elevated inventory levels in the U.S., the war in Ukraine and COVID-19 lockdowns in China presenting ongoing challenges for the market, according to Clive. Shippers are also being drawn away due to improving reliability in ocean shipping.</p>
                <p>&nbsp;</p>
                <p>Click on the link to read the full article:&nbsp;<a href="https://www.supplychaindive.com/news/air-cargo-volumes-continue-dip-sellers-market-clive-xeneta/631675/" target="_blank" rel="noopener">https://www.supplychaindive.com/news/air-cargo-volumes-continue-dip-sellers-market-clive-xeneta/631675/</a></p>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>',
                'image' => '1700145287blog11.png',
                'alt_image' => 'Alt Image',
                'title1'=>'Air cargo',
                'title2'=>'COVID-19',
                'title3'=>'Air freight',
                'title4'=>NULL,
                'title5'=>NULL,
                'title6'=>NULL,
                'title7'=>NULL,
                'title8'=>NULL,
                'meta_title' => 'Meta title',
                'meta_description' => '<p>Meta Description</p>',
                'meta_keywords' => '<p>Meta keywords</p>',
                'og_image' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            12 => 
            array (
                'id' => 13,
                'title' => "Can retail close the gap on supply chain emissions?",
                'date' => '2022-08-16',
                'by'=>"Ben Unglesbee | Supply Chain Dive",
                'text_blog' => '<div class="mt-5 container">
                <p>The industry is woefully behind on Scope 3 targets for greenhouse gases. Data poses steep challenges, but experts say retailers still can and must do more.</p>
                </div>
                <div class="container my-5">
                <div id="" class="">
                <div id="v-pills-t2" class="tab-pane fade active show" role="tabpanel" aria-labelledby="v-pills-t2-tab">
                <div class="row">
                <div class="col-lg-12 align-self-center">
                <div class="about-right">
                <h4>For retail, the most daunting task in decarbonizing the most complex in terms of data and execution is also the most critical.</h4>
                <p>Below article from Supply Chain Dive,</p>
                <p>Scope 3 encompasses emissions up and down the value chain, from materials to the supply chain and so on to the consumer&rsquo;s final use of a product. It is, by far, the largest share of retail&rsquo;s footprint. Indirect scope 3 emissions account for 90%, and sometimes up to 98%, of retailers&rsquo; greenhouse gas emissions, according to the National Retail Federation.&nbsp;</p>
                <p>Click on the link to read the full article: https://www.supplychaindive.com/news/retail-scope-3-supply-chain-carbon-emissions/627468/</p>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>',
                'image' => '1700145318blog12.png',
                'alt_image' => 'Alt Image',
                'title1'=>'maritime',
                'title2'=>'Freight',
                'title3'=>'Supply Chain',
                'title4'=>'Transport',
                'title5'=>'Port',
                'title6'=>NULL,
                'title7'=>NULL,
                'title8'=>NULL,
                'meta_title' => 'Meta title',
                'meta_description' => '<p>Meta Description</p>',
                'meta_keywords' => '<p>Meta keywords</p>',
                'og_image' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),

            13 => 
            array (
                'id' => 14,
                'title' => "Supply chain issues threaten data center construction boom",
                'date' => '2022-06-13',
                'by'=>"Supply Chain Dive",
                'text_blog' => '<div class="mt-5 container">
                <p>Transatlantic capacity is returning to the air cargo market as airlines ramp up their summer schedules to meet rebounding passenger demand</p>
                </div>
                <div class="container my-5">
                <div id="" class="">
                <div id="v-pills-t2" class="tab-pane fade active show" role="tabpanel" aria-labelledby="v-pills-t2-tab">
                <div class="row">
                <div class="col-lg-12 align-self-center">
                <div class="about-right">
                <h4>The global air cargo market remains hobbled by macroeconomic challenges</h4>
                <p>Below article from Supplychaindive.com</p>
                <p>The added capacity across the Atlantic Ocean is a welcome relief for air cargo shippers. More flights have helped cool off Transatlantic airfreight rates that have been elevated since the COVID-19 pandemic cratered travel demand and reduced belly capacity on passenger airlines.</p>
                <p>&nbsp;</p>
                <p>&ldquo;In the last week of May 2022, rates from Europe to North America showed negative year-over-year growth for the first time in two years,&rdquo; according to Clive&rsquo;s news release.</p>
                <p>U.S. passenger airlines signaled last year they would increase this summer&rsquo;s Transatlantic flight activity as COVID-19 travel restrictions eased. Executives have since touted high demand for flights between Europe and North America.</p>
                <p>Click on the link to read the full article:&nbsp;https://www.supplychaindive.com/news/transatlantic-airfreight-capacity-passenger-airlines-cargo/624950/</p>
                <p>&nbsp;</p>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>',
                'image' => '1700145399blog15.png',
                'alt_image' => 'Alt Image',
                'title1'=>NULL,
                'title2'=>NULL,
                'title3'=>NULL,
                'title4'=>NULL,
                'title5'=>NULL,
                'title6'=>NULL,
                'title7'=>NULL,
                'title8'=>NULL,
                'meta_title' => 'Meta title',
                'meta_description' => '<p>Meta Description</p>',
                'meta_keywords' => '<p>Meta keywords</p>',
                'og_image' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            14 => 
            array (
                'id' => 15,
                'title' => "",
                'date' => '',
                'by'=>"",
                'text_blog' => '',
                'image' => '',
                'alt_image' => 'Alt Image',
                'title1'=>'',
                'title2'=>'',
                'title3'=>NULL,
                'title4'=>NULL,
                'title5'=>NULL,
                'title6'=>NULL,
                'title7'=>NULL,
                'title8'=>NULL,
                'meta_title' => 'Meta title',
                'meta_description' => '<p>Meta Description</p>',
                'meta_keywords' => '<p>Meta keywords</p>',
                'og_image' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            15 => 
            array (
                'id' => 16,
                'title' => "Carriers, shippers grapple with how to cut emissions in airfreight",
                'date' => '2022-06-13',
                'by'=>"Supply Chain Dive",
                'text_blog' => '<div class="mt-5 container">
                <p>Transatlantic capacity is returning to the air cargo market as airlines ramp up their summer schedules to meet rebounding passenger demand</p>
                </div>
                <div class="container my-5">
                <div id="" class="">
                <div id="v-pills-t2" class="tab-pane fade active show" role="tabpanel" aria-labelledby="v-pills-t2-tab">
                <div class="row">
                <div class="col-lg-12 align-self-center">
                <div class="about-right">
                <h4>The global air cargo market remains hobbled by macroeconomic challenges</h4>
                <p>Below article from Supplychaindive.com</p>
                <p>The added capacity across the Atlantic Ocean is a welcome relief for air cargo shippers. More flights have helped cool off Transatlantic airfreight rates that have been elevated since the COVID-19 pandemic cratered travel demand and reduced belly capacity on passenger airlines.</p>
                <p>&nbsp;</p>
                <p>&ldquo;In the last week of May 2022, rates from Europe to North America showed negative year-over-year growth for the first time in two years,&rdquo; according to Clive&rsquo;s news release.</p>
                <p>U.S. passenger airlines signaled last year they would increase this summer&rsquo;s Transatlantic flight activity as COVID-19 travel restrictions eased. Executives have since touted high demand for flights between Europe and North America.</p>
                <p>Click on the link to read the full article:&nbsp;https://www.supplychaindive.com/news/transatlantic-airfreight-capacity-passenger-airlines-cargo/624950/</p>
                <p>&nbsp;</p>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>',
                'image' => '1700145399blog15.png',
                'alt_image' => 'Alt Image',
                'title1'=>'Air',
                'title2'=>'Freight',
                'title3'=>'Supply Chain',
                'title4'=>'Transport',
                'title5'=>'Port',
                'title6'=>NULL,
                'title7'=>NULL,
                'title8'=>NULL,
                'meta_title' => 'Meta title',
                'meta_description' => '<p>Meta Description</p>',
                'meta_keywords' => '<p>Meta keywords</p>',
                'og_image' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),

            16 => 
            array (
                'id' => 17,
                'title' => "Manufacturing orders down, prices up amid war in Ukraine, China shutdowns",
                'date' => '2022-04-19',
                'by'=>"Supply Chain Dive",
                'text_blog' => '<div class="mt-5 container">
                <p>Rising prices and sagging exports hurt manufacturing orders during the typically busy month of March, amid Russia s invasion of Ukraine and COVID-19 shutdowns in China</p>
                </div>
                <div class="container my-5">
                <div id="" class="">
                <div id="v-pills-t2" class="tab-pane fade active show" role="tabpanel" aria-labelledby="v-pills-t2-tab">
                <div class="row">
                <div class="col-lg-12 align-self-center">
                <div class="about-right">
                <p class="MsoNormal"><strong>Below article from SupplyChainDive.com</strong></p>
                <p class="MsoNormal">March is typically the biggest month of the year for new<br>orders as companies stock inventory for summer and fall.</p>
                <p class="MsoNormal">Demand remains strong, with inventories remaining low for<br>the 20th straight month. But as procurement teams continued to face inflated<br>prices, difficulty procuring raw materials, and extended lead times last month,<br>some paused to see if conditions would improve.</p>
                <p class="MsoNormal">Click on the link to read the<br>full article:<br>supplychaindive.com/news/manufacturing-orders-down-prices-ukraine-china-effects/621666/</p>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>',
                'image' => '1700145454blog16.jpeg',
                'alt_image' => 'Alt Image',
                'title1'=>'Fuel',
                'title2'=>'maritime',
                'title3'=>'Freight',
                'title4'=>'Container',
                'title5'=>'Transport',
                'title6'=>'Port',
                'title7'=>NULL,
                'title8'=>NULL,
                'meta_title' => 'Meta title',
                'meta_description' => '<p>Meta Description</p>',
                'meta_keywords' => '<p>Meta keywords</p>',
                'og_image' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),

            17 => 
            array (
                'id' => 18,
                'title' => "Fuel surcharges loom for shippers as Ukraine crisis drives up oil prices",
                'date' => '2022-03-11',
                'by'=>"Supply Chain Dive | Jim Stinson",
                'text_blog' => '<div class="mt-5 container">
                <p>With global oil prices jumping to over $100 per barrel on Tuesday, largely due to the war in Ukraine, shippers could see fuel surcharges as trucking fleets and small carriers pass on the costs.</p>
                </div>
                <div class="container my-5">
                <div id="" class="">
                <div id="v-pills-t2" class="tab-pane fade active show" role="tabpanel" aria-labelledby="v-pills-t2-tab">
                <div class="row">
                <div class="col-lg-12 align-self-center">
                <div class="about-right">
                <h4>Higher oil prices are translating directly to higher diesel prices.</h4>
                <p class="MsoNormal"><strong>Below<br>article from SupplyChainDive.com</strong></p>
                <p class="MsoNormal">As the price of oil surpasses<br>$100 per barrel, trucking companies are expected to pass on the costs.</p>
                <p>On Monday, the Energy Information<br>Administration reported&nbsp;U.S. diesel prices were $4.104 per gallon, up 4.9<br>cents in a week, and $1.032 from a year before. Diesel prices are likely to go<br>higher as Russia and Ukraine continue to fight, and as oil companies pull<br>business from Russia,&nbsp;the third-largest oil producer in the world, after<br>the United States and Saudi Arabia.</p>
                <p>Click on the link to<br>read the full article: supplychaindive.com/news/Ukraine-diesel-oil-trucking-fuel-surcharges/619823/</p>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>',
                'image' => '1700145477blog17.jpeg',
                'alt_image' => 'Alt Image',
                'title1'=>'Fuel',
                'title2'=>'maritime',
                'title3'=>'Freight',
                'title4'=>'Container',
                'title5'=>'Transport',
                'title6'=>'Port',
                'title7'=>NULL,
                'title8'=>NULL,
                'meta_title' => 'Meta title',
                'meta_description' => '<p>Meta Description</p>',
                'meta_keywords' => '<p>Meta keywords</p>',
                'og_image' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),

            18 => 
            array (
                'id' => 19,
                'title' => "Customer supply chain issues sparked lower peak volumes: carriers",
                'date' => '2022-02-14',
                'by'=>"Supply Chain Dive | Max Garland",
                'text_blog' => '<div class="mt-5 container">
                <p>Supply chain issues limited its customers available inventory for e-commerce orders and many shoppers went to brick-and-mortar stores to seek in-stock items.</p>
                </div>
                <div class="container my-5">
                <div id="" class="">
                <div id="v-pills-t2" class="tab-pane fade active show" role="tabpanel" aria-labelledby="v-pills-t2-tab">
                <div class="row">
                <div class="col-lg-12 align-self-center">
                <div class="about-right">
                <h4>Parcel delivery companies made major investments in their networks to help handle what they thought would be another pronounced surge for the 2021 peak season.</h4>
                <h2><span style="color: #636363;">Below article from SupplyChainDive.com</span></h2>
                <p class="MsoNormal"><span style="color: #636363;">In November,&nbsp;Pitney Bowes announced&nbsp;it would further expand<br>capacity and hire thousands of seasonal warehouse workers and drivers to meet<br>its expected holiday e-commerce demand.</span></p>
                <p class="MsoNormal"><span style="color: #636363;">Click on the link to read the full article:</span><span style="color: #636363;"><br>&nbsp;</span><a href="https://www.supplychaindive.com/news/pitney-bowes-supply-chain-issues-lower-peak-season-volume/618293/"><span style="color: #636363;">https://www.supplychaindive.com/news/pitney-bowes-supply-chain-issues-lower-peak-season-volume/618293/</span></a></p>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>',
                'image' => '1700145506blog18.jpe',
                'alt_image' => 'Alt Image',
                'title1'=>'maritime',
                'title2'=>' Freight',
                'title3'=>'Supply Chain',
                'title4'=>' Transport',
                'title5'=>'Port',
                'title6'=>NULL,
                'title7'=>NULL,
                'title8'=>NULL,
                'meta_title' => 'Meta title',
                'meta_description' => '<p>Meta Description</p>',
                'meta_keywords' => '<p>Meta keywords</p>',
                'og_image' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),

            19 => 
            array (
                'id' => 20,
                'title' => "Peak season management",
                'date' => '2022-01-17',
                'by'=>"Supply Chain Dive",
                'text_blog' => '<div class="mt-5 container">
                <p>With the holidays, shipping has become harder with delays, surcharges and return.</p>
                </div>
                <div class="container my-5">
                <div id="" class="">
                <div id="v-pills-t2" class="tab-pane fade active show" role="tabpanel" aria-labelledby="v-pills-t2-tab">
                <div class="row">
                <div class="col-lg-12 align-self-center">
                <div class="about-right">
                <h4>Navigating supply chain peak season in 2021</h4>
                <p>&nbsp;</p>
                <h2>Below article from<br>SupplyChainDive.com</h2>
                <p class="MsoNormal">This year`s peak season is arriving earlier than the<br>usual holiday inventory rush, and procurement leaders are already preparing.<br>Navigating a post-pandemic surge in demand will come with unique challenges,<br>particularly against a backdrop of heavy consumer spending in online retail.</p>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>',
                'image' => '1700145533blog19.png',
                'alt_image' => 'Alt Image',
                'title1'=>'maritime',
                'title2'=>'Freight',
                'title3'=>'Supply Chain',
                'title4'=>'Transport',
                'title5'=>NULL,
                'title6'=>NULL,
                'title7'=>NULL,
                'title8'=>NULL,
                'meta_title' => 'Meta title',
                'meta_description' => '<p>Meta Description</p>',
                'meta_keywords' => '<p>Meta keywords</p>',
                'og_image' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),

            20 => 
            array (
                'id' => 21,
                'title' => "Historic lows in ocean carrier reliability leave shippers looking for alternatives",
                'date' => '2021-12-13',
                'by'=>"Supply Chain Dive | Alejandra Salgado",
                'text_blog' => '<div class="mt-5 container">
                <p>Poor schedule reliability, coupled with high consumer demand, has handed shippers and forwarders a myriad of challenges.</p>
                </div>
                <div class="container my-5">
                <div id="" class="">
                <div id="v-pills-t2" class="tab-pane fade active show" role="tabpanel" aria-labelledby="v-pills-t2-tab">
                <div class="row">
                <div class="col-lg-12 align-self-center">
                <div class="about-right">
                <h4>Delays and Congestion at the Ports</h4>
                <p>Below article from SupplyChainDive.com</p>
                <p>Congestion at&nbsp;the ports due to lack of equipment such as&nbsp;chassis,&nbsp;empty containers&nbsp;not<br>moving as fluidly, and&nbsp;lack of room for containers and ships&nbsp;are all<br>contributors to schedule unreliability. The lack of space in particular leaves<br>container ships sitting idle and further delays cargo.</p>
                <p>To&nbsp;combat these delays, many shippers are seeking alternative options, such as air<br>transportation and LCL ocean shipping.</p>
                <p>Click on the link to read the full article:&nbsp;<a href="https://www.supplychaindive.com/news/ocean-shipping-carrier-schedule-reliability/610810/" target="_blank" rel="noopener">https://www.supplychaindive.com/news/ocean-shipping-carrier-schedule-reliability/610810/</a></p>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>',
                'image' => '1700145578blog20.jpeg',
                'alt_image' => 'Alt Image',
               'title1'=>'maritime',
                'title2'=>'Freight',
                'title3'=>'Supply Chain',
                'title4'=>'Transport',
                'title5'=>'Port',
                'title6'=>NULL,
                'title7'=>NULL,
                'title8'=>NULL,
                'meta_title' => 'Meta title',
                'meta_description' => '<p>Meta Description</p>',
                'meta_keywords' => '<p>Meta keywords</p>',
                'og_image' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            21 => 
            array (
                'id' => 22,
                'title' => "Top shipping nations join forces in Glasgow to develop green corridors",
                'date' => '2021-11-11',
                'by'=>"Splash247.com",
                'text_blog' => '<div class="mt-5 container">
                <p>Today, at COP26, the major international climate summit, 19 countries &ndash; including shipping powerhouses such as the US, Japan, Germany, Norway, the Netherlands, the UK and Australia &ndash; joined the first ever framework to create zero-emission ocean shipping corridors, the Clydebank Declaration for clean shipping corridors.</p>
                </div>
                <div class="container my-5">
                <div id="" class="">
                <div id="v-pills-t2" class="tab-pane fade active show" role="tabpanel" aria-labelledby="v-pills-t2-tab">
                <div class="row">
                <div class="col-lg-12 align-self-center">
                <div class="about-right">
                <h4>Green corridors are essential to support first mover viability</h4>
                <p>Below article from <a href="http://baconigroup.com/blog/Splash247.com" target="_blank" rel="noopener">Splash247.com</a></p>
                <p>By building out zero-emission maritime corridors, major trade partners can catalyse land-side investments needed in clean energy and zero-emission electro-fuel infrastructure at ports. The corridors approach enables governments to first incentivise and, eventually, require that only zero-emission ships can travel from, say, Shanghai to Los Angeles or Rotterdam to New York.</p>
                <p>Click on the link to read the full article:&nbsp;<span style="color: #555555; font-family: Open Sans, sans-serif;"><a href="https://splash247.com/top-shipping-nations-join-forces-in-glasgow-to-develop-green-corridors/" target="_blank" rel="noopener">https://splash247.com/top-shipping-nations-join-forces-in-glasgow-to-develop-green-corridors/</a></span></p>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>',
                'image' => '1700145676blog21.jpeg',
                'alt_image' => 'Alt Image',
                'title1'=>'maritime',
                'title2'=>'Freight',
                'title3'=>'Supply Chain',
                'title4'=>'Transport',
                'title5'=>'Glasgow',
                'title6'=>'Green corridors',
                'title7'=>NULL,
                'title8'=>NULL,
                'meta_title' => 'Meta title',
                'meta_description' => '<p>Meta Description</p>',
                'meta_keywords' => '<p>Meta keywords</p>',
                'og_image' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            22 => 
            array (
                'id' => 23,
                'title' => "Are container freight rates just circling or preparing to land?",
                'date' => '2021-10-19',
                'by'=>"Splash247.com",
                'text_blog' => '<div class="mt-5 container">
                <p>Three reasons underpin why freight rates will not fall below pre-pandemic levels but three more that suggest they will not be substantially higher after 2023, writes Daniel Richards from MSI.</p>
                </div>
                <div class="container my-5">
                <div id="" class="">
                <div id="v-pills-t2" class="tab-pane fade active show" role="tabpanel" aria-labelledby="v-pills-t2-tab">
                <div class="row">
                <div class="col-lg-12 align-self-center">
                <div class="about-right">
                <h4>How long can this last?</h4>
                <p>Below article from Splash247.com</p>
                <p>With peak season now fully underway,&nbsp;<strong>container freight</strong>&nbsp;rates continue to smash past previous historical records. A combination of healthy demand volumes, extensive port congestion and shippers facing order backlogs and the risk of empty shelves during the holiday season has driven spot freight rate assessments on key trades far beyond anything witnessed before 2021.<br><br>The question that arises is how long can this last? In terms of our near-term forecast outlook, this of course remains highly uncertain, and also subject to a range of factors that fall beyond the scope of &lsquo;traditional&rsquo; supply-demand balances.<br><br>Click on the link to read the full article:&nbsp;<a href="https://splash247.com/are-container-freight-rates-just-circling-or-preparing-to-land/" target="_blank" rel="noopener">https://splash247.com/are-container-freight-rates-just-circling-or-preparing-to-land/</a></p>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                <div class="container my-5">
                <div id="" class="">
                <div id="v-pills-t2" class="tab-pane fade active show" role="tabpanel" aria-labelledby="v-pills-t2-tab">
                <div class="row">
                <div class="col-lg-12 align-self-center">
                <div class="about-right">&nbsp;</div>
                </div>
                </div>
                </div>
                </div>
                </div>
                <div class="container my-5">
                <div id="" class="">
                <div id="v-pills-t2" class="tab-pane fade active show" role="tabpanel" aria-labelledby="v-pills-t2-tab">
                <div class="row">&nbsp;</div>
                </div>
                </div>
                </div>',
                'image' => '1700145747blog22.jpeg',
                'alt_image' => 'Alt Image',
                'title1'=>'maritime',
                'title2'=>'Freight',
                'title3'=>'Container',
                'title4'=>'Transport',
                'title5'=>NULL,
                'title6'=>NULL,
                'title7'=>NULL,
                'title8'=>NULL,
                'meta_title' => 'Meta title',
                'meta_description' => '<p>Meta Description</p>',
                'meta_keywords' => '<p>Meta keywords</p>',
                'og_image' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),

            23 => 
            array (
                'id' => 24,
                'title' => "",
                'date' => '',
                'by'=>"",
                'text_blog' => '',
                'image' => '',
                'alt_image' => 'Alt Image',
                'title1'=>'',
                'title2'=>'',
                'title3'=>NULL,
                'title4'=>NULL,
                'title5'=>NULL,
                'title6'=>NULL,
                'title7'=>NULL,
                'title8'=>NULL,
                'meta_title' => 'Meta title',
                'meta_description' => '<p>Meta Description</p>',
                'meta_keywords' => '<p>Meta keywords</p>',
                'og_image' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
        ));
    }
}
