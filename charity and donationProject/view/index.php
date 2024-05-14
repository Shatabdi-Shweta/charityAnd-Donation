<?php
    include_once '../model/donorDetailsModel.php';
    include_once '../model/campaignPerformances.php';

    $recentDonation = recent_donation();
    $ongoingCampaign = ongoing_campaign();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="../assets/css/index_style.css">
</head>
<body>
    <h1>Charity and Donation</h1>

    <table width="70%">
        <tr>
            <td width="50%">
                <form action="">
                    <fieldset >
                        <legend>Recent Donation</legend>

                        <b>Name:</b> <?=$recentDonation[0]['donor_name']?>
                        <br><br>
                        <b>Campaign:</b> Sylhet Flood
                    </fieldset>
                </form>
            </td>

            <td>
                <form action="">
                    <fieldset>
                        <legend>Ongoing Campaign</legend>

                        <b>Campaign Name:</b> <?=$ongoingCampaign[0]['campaign_name']?>
                        <br><br>
                        <b>Progress:</b> <?=$ongoingCampaign[0]['total_response']?>
                    </fieldset>
                </form>
            </td>
        </tr>

        <tr>
            <td>
                <br><br><br>
            </td>
        </tr>

        <tr>
            <td>
                <form action="">
                    <fieldset >
                        <legend>Impact</legend>

                        We did it! Together, we raised $20000 for Sylhet Flood! Thanks to your generosity, we're making a real difference. Because of your support, we can continue charity mission.
                    </fieldset>
                </form>
            </td>

            <td>
                <form action="">
                    <fieldset>
                        <legend>Upcoming Event</legend>

                        <b>Shaping Tomorrow, Today: Help Us Launch the "Lunar Oasis" Project!</b>
                        <br><br>
                        Imagine a future where lunar settlements rely on self-sustaining ecosystems. The "Lunar Oasis" project, spearheaded by [Your Charity Name], aims to make this vision a reality.

This groundbreaking initiative will develop and send the first biodomes to the Moon, fostering plant growth and paving the way for a more sustainable future in space exploration.
                    </fieldset>
                </form>
            </td>
        </tr>
        <tr>
            <td>
                <br><br><br>
            </td>
        </tr>
        <tr>
            <td >
                <form action="">
                    <fieldset style="width:195%; margin: 0 auto;">
                        <legend>About US</legend>
                                
                                Welcome to xyz Foundation, a beacon of hope and compassion dedicated to making a positive impact in the lives of those in need. At Iccha Foundation, we believe in the transformative power of kindness and generosity, striving to create a better world for all. <br>

    Founded with a vision to alleviate suffering and promote well-being, Iccha Foundation stands as a testament to the boundless potential of human empathy. Guided by the principle that every individual deserves a chance to thrive, we tirelessly work towards fostering sustainable change and empowering communities. <br>

    Driven by a passionate team of volunteers and supporters, Iccha Foundation channels resources, time, and effort towards addressing pressing societal challenges. From providing essential aid to vulnerable populations to spearheading innovative initiatives for social development, we are committed to leaving a lasting legacy of compassion and solidarity.
                                <br>
    Our mission extends beyond charity; it is a commitment to dignity, justice, and equality for all. Through collaboration, advocacy, and action, we strive to create a world where every person's fundamental rights are respected, and every dream is within reach.
                                <br>
    Join us in our journey to spread hope, inspire change, and make a meaningful difference in the world. Together, we can build a future where compassion reigns, and every individual has the opportunity to fulfill their aspirations. Thank you for being a part of the Iccha Foundation family.
                                
                    </fieldset>
                </form>
            </td>
        </tr>
        <tr>
            <td>
                <br><br><br>
            </td>
        </tr>
        <tr>
            <td>
                <form action="">
                    <fieldset style="width:195%; margin: 0 auto;">
                        <legend>Vision</legend>
                        
        Our vision at xyz Foundation is to create a world where every individual has the opportunity to live a life of dignity, hope, and fulfillment. We envision a society where compassion and empathy are the cornerstones of human interaction, where no one is left behind, and where every person's potential is nurtured and celebrated.
       
                    </fieldset>
                </form>
            </td>
        </tr>
        <tr>
            <td>
                <br><br><br>
            </td>
        </tr>
        <tr>
            <td>
                <form action="">
                    <fieldset style="width:195%; margin: 0 auto;">
                        <legend>Mission</legend>
                        
        At xyz Foundation, our mission is to alleviate suffering, promote well-being, and empower communities through acts of kindness and generosity. We are dedicated to: <br>
<br>
        1.Providing essential aid and support to vulnerable populations, including but not limited to those affected by poverty, natural disasters, and humanitarian crises. <br> <br>
        2.Spearheading innovative initiatives for social development, education, healthcare, and environmental sustainability. <br> <br>
        
        3.Advocating for the rights and dignity of all individuals, particularly marginalized and underserved communities. <br> <br>
        
        4.Fostering a culture of compassion, empathy, and inclusivity through awareness campaigns, educational programs, and community engagement. <br> <br>
        
        5.Collaborating with like-minded organizations, volunteers, and supporters to maximize our impact and create positive change on a global scale. <br> <br>
        
        Through our unwavering commitment to these principles, we aim to build a brighter future for generations to come, where every person has the opportunity to thrive and fulfill their aspirations.
        
                    </fieldset>
                </form>
            </td>
        </tr>

        <tr>
            <td>
                <br><br>
            </td>
        </tr>

        <tr>
            <td colspan=2>
                <center>
                    <a href="login.php"><button>Login</button></a>
                    <a href="signup.php"><button>Registration</button></a>
                </center>
            </td>
        </tr>
    </table>
</body>
</html>