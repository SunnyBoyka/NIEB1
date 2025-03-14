<?php

function getBotResponse($message) {
    
    $responses = array(
        "hi" => array(
            "Hello there! How can I assist you today?",
            // "Hey! What can I do for you?",
            // "Hi! How can I help you?",
        ),
        "how are you" => array(
            "I'm just a bot, but thanks for asking!",
            // "I'm doing well, thank you!",
            // "Thanks for asking! I'm here to assist you.",
        ),
        "bye" => array(
            "Goodbye! Have a great day!",
            // "See you later! If you need anything else, just ask.",
            // "Bye! Feel free to reach out anytime.",
        ),
        
        "water conservation" => array(
            "Description: Enhance recharge of aquifers and introduce sustainable water conservation practices. Promote extension activities relating to water harvesting, water management, and crop alignment for farmers and grassroots level field functionaries.",
            "Crop: Cotton",
            "For more information, you can visit: https://pmksy.gov.in/mis/frmDashboard.aspx",
        ),
        "aquifer recharge" => array(
            "Description: Enhance recharge of aquifers and introduce sustainable water conservation practices. Promote extension activities relating to water harvesting, water management, and crop alignment for farmers and grassroots level field functionaries.",
            "Crop: Cotton",
            "For more information, you can visit: https://pmksy.gov.in/mis/frmDashboard.aspx",
        ),
        "crop alignment" => array(
            "Description: Enhance recharge of aquifers and introduce sustainable water conservation practices. Promote extension activities relating to water harvesting, water management, and crop alignment for farmers and grassroots level field functionaries.",
            "Crop: Cotton",
            "For more information, you can visit: https://pmksy.gov.in/mis/frmDashboard.aspx",
        ),
        "crop loss" => array(
            "Description: Providing financial support to farmers suffering crop loss/damage arising out of unforeseen events. Stabilizing the income of farmers to ensure their continuance in farming. Encouraging farmers to adopt innovative and modern agricultural practices.",
            "Crop: All",
            "For more information, you can visit: https://pmfby.gov.in/ext/rpt/ssfr_17",
        ),
        "financial support" => array(
            "Description: Providing financial support to farmers suffering crop loss/damage arising out of unforeseen events. Stabilizing the income of farmers to ensure their continuance in farming. Encouraging farmers to adopt innovative and modern agricultural practices.",
            "Crop: All",
            "For more information, you can visit: https://pmfby.gov.in/ext/rpt/ssfr_17",
        ),
        "innovative practices" => array(
            "Description: Providing financial support to farmers suffering crop loss/damage arising out of unforeseen events. Stabilizing the income of farmers to ensure their continuance in farming. Encouraging farmers to adopt innovative and modern agricultural practices.",
            "Crop: All",
            "For more information, you can visit: https://pmfby.gov.in/ext/rpt/ssfr_17",
        ),
        "marketing infrastructure" => array(
            "Description: Improved marketing infrastructure to allow farmers to sell directly to a larger base of consumers and hence, increase value realization for the farmers. This will improve the overall income of farmers.",
            "Crop: All",
            "For more information, you can visit: http://agriinfra.dac.gov.in/",
        ),
        "improved marketing" => array(
            "Description: Improved marketing infrastructure to allow farmers to sell directly to a larger base of consumers and hence, increase value realization for the farmers. This will improve the overall income of farmers.",
            "Crop: All",
            "For more information, you can visit: http://agriinfra.dac.gov.in/",
        ),
        "capacity building" => array(
            "Description: Empowers farmers with increased capacity building. Bring consumers to the farm without the need for a middleman. Consumers and buyers are often involved in the production and verification process.",
            "Crop: All",
            "For more information, you can visit: https://pgsindia-ncof.gov.in/home.aspx",
        ),
        "empowering farmers" => array(
            "Description: Empowers farmers with increased capacity building. Bring consumers to the farm without the need for a middleman. Consumers and buyers are often involved in the production and verification process.",
            "Crop: All",
            "For more information, you can visit: https://pgsindia-ncof.gov.in/home.aspx",
        ),
        "organic farming" => array(
            "Description: Promotes organic farming in the country by providing financial assistance to states for setting up clusters of organic producers, certification process, and marketing infrastructure.",
            "Crop: All",
            "For more information, you can visit: https://www.mygov.in/task/poster-making-contest-paramparagat-krishi-vikas-yojana/",
        ),
        "organic agriculture" => array(
            "Description: Promotes organic farming in the country by providing financial assistance to states for setting up clusters of organic producers, certification process, and marketing infrastructure.",
            "Crop: All",
            "For more information, you can visit: https://www.mygov.in/task/poster-making-contest-paramparagat-krishi-vikas-yojana/",
        ),
        "increased productivity" => array(
            "Description: To increase the production of targeted crops to ensure food security and enhance the income of farmers. It focuses on increasing productivity through the adoption of improved technologies, high-yielding varieties, and better agricultural practices.",
            "Crop: All",
            "For more information, you can visit: http://nfsm.gov.in/",
        ),
        "agricultural productivity" => array(
            "Description: To increase the production of targeted crops to ensure food security and enhance the income of farmers. It focuses on increasing productivity through the adoption of improved technologies, high-yielding varieties, and better agricultural practices.",
            "Crop: All",
            "For more information, you can visit: http://nfsm.gov.in/",
        ),
        "investment in agriculture" => array(
            "Description: To incentivize states to increase their investment in agriculture and allied sectors. It supports the development of infrastructure, research and development, extension services, and capacity building to enhance agricultural productivity and farmers' income.",
            "Crop: All",
            "For more information, you can visit: https://rkvy.nic.in/",
        ),
        "agricultural investment" => array(
            "Description: To incentivize states to increase their investment in agriculture and allied sectors. It supports the development of infrastructure, research and development, extension services, and capacity building to enhance agricultural productivity and farmers' income.",
            "Crop: All",
            "For more information, you can visit: https://rkvy.nic.in/",
        ),
        "soil health card" => array(
            "Description: Aims to empower farmers to make informed decisions for improving soil fertility and productivity through the issuance of soil health cards. It covers all crops grown in the country.",
            "Crop: All",
            "For more information, you can visit: https://www.unnatbharatabhiyansrmist.com/2020/08/soil-health-card-scheme.html/",
        ),
        "soil fertility" => array(
            "Description: Aims to empower farmers to make informed decisions for improving soil fertility and productivity through the issuance of soil health cards. It covers all crops grown in the country.",
            "Crop: All",
            "For more information, you can visit: https://www.unnatbharatabhiyansrmist.com/2020/08/soil-health-card-scheme.html/",
        ),
        "anthracnose" => array(
            "Description: Anthracnose, a group of fungal diseases that affect a variety of plants in warm, humid areas. Shade trees such as sycamore, ash, oak, and maple are especially susceptible, though the disease is found in a number of plants, including grasses and annuals.", 
            "For more information, you can visit: https://www.britannica.com/science/anthracnose/",
        ),
        "alternaria alternata" => array(
            "Description: Alternaria alternata is a fungus that can cause rot and black spots in fruits and vegetables. It's a common pathogen found in many natural food products, including: Fruits and vegetables, Cereal plants, Seeds, and Other plant organs. 
            Alternaria alternata can also produce several toxic compounds, including: Alternariols, Altenuene, Tentoxin, and Tenuazonic acid.", 
            "For more information, you can visit: https://www.ncbi.nlm.nih.gov/pmc/articles/PMC10053571/",
        ),
        "bacterial blight " => array(
            "Description: Bacterial blight (Pseudomonas savastanoi) of soybeans is typically an early season disease, which over winters in the field on plant residue. Initial infection of soybeans occurs when wind or splashing water droplets from plant residue on the soil surface to the leaves carry bacterial cells.", 
            "For more information, you can visit: https://cropwatch.unl.edu/plantdisease/soybean/bacterial-blight",
        ),
        "cercospora leaf spot" => array(
            "Description: Cercospora leaf spot is a common disease in beetroot and silver beet but is usually unimportant in well-managed crops. It may be a significant problem in crops grown for baby-leaf production, because the foliage is the saleable product.", 
            "For more information, you can visit: https://www.business.qld.gov.au/industries/farms-fishing-forestry/agriculture/biosecurity/plants/diseases/horticultural/cercospora-leaf-spot#:~:text=Symptoms,on%20leaves%2C%20petioles%20and%20stems.",
        ),
        "late blight" => array(
            "Description: Late blight is a devastating disease caused by a water mold called Phytophthora infestans. It primarily affects potato and tomato plants, but can also infect other members of the nightshade family, like eggplant and petunia.  This disease is infamous for contributing to the Irish Potato Famine of the 1840s", 
            "For more information, you can visit: https://www.apsnet.org/edcenter/disandpath/oomycete/pdlessons/Pages/LateBlight.aspx",
        ),
        "early blight" => array(
            "Description: Early blight, caused by the fungus Alternaria solani, is a common and destructive disease that plagues tomatoes, potatoes (though less common on them), eggplants, and other solanaceous plants. While not as devastating as late blight, early blight can significantly reduce yields and fruit quality if left unchecked.", 
            "For more information, you can visit: https://www.apsnet.org/edcenter/disandpath/oomycete/pdlessons/Pages/LateBlight.aspx",
        ),
        
        "viral" => array(
            "Description: Viral leaf diseases are a major threat to plant health, causing significant economic losses in agriculture and impacting the beauty of ornamental plants. 
            Unlike fungal or bacterial diseases, viruses are much smaller and more complex, hijacking the plant's cellular machinery to replicate themselves. This disruption leads to a variety of symptoms, primarily affecting the leaves, but also impacting overall plant growth and yield.", 
            "For more information, you can visit: https://www.apsnet.org/edcenter/disandpath/viral/introduction/Pages/PlantViruses.aspx",
        ),
        
        "joke" => array(
            "Why don't scientists trust atoms? Because they make up everything!",
            "I told my wife she was drawing her eyebrows too high. She looked surprised!",
            "What did one plate say to the other plate? Dinner's on me!",
        ),
    );

    $matchedResponses = array();

    foreach ($responses as $keyword => $response) {
        if (stripos($message, $keyword) !== false) {
            $matchedResponses[] = $response;
        }
    }

    if (!empty($matchedResponses)) {
        // Flatten the array of matched responses
        $flattenedResponses = array_merge(...$matchedResponses);
        return $flattenedResponses;
    } else {
        return array("I'm sorry, I'm not sure how to respond to that. Feel free to ask me something else!");
    }
}

$userMessage = $_POST['reply'];
$botResponse = getBotResponse($userMessage);
$return = "";
foreach ($botResponse as $line) {
    $return .= $line . "<br>";
}

echo $return;
?>
 
