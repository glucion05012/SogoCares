<div class="content-wrapper">
<?php

if($title == 1){
    $header = 'Hotel Sogo supports DOH’s Anti-COVID-19 Campaign';
    $content = 'Amid the Luzon-wide quarantine working at hand, Hotel Sogo supports the nationwide anti-COVID-19 campaign through information dissemination and by helping fellow healthcare frontliners to have proper accommodation in time of crisis.<br><br>
    “ We don’t want our health workers to just sleep in the hospital corrigidors after a long shifts , as they have nowhere else  to go, we want them to have safe and a nice place to stay, that’s why we are offering our hotels for them. Frontliners have shown selfless commitment and risk their lives every day, they deserve more than this,”  stated by Ms. Sue Geminiano, Hotel Sogo, Marketing Manager. <br><br>
    Since Hotel Sogo has recently allocated 830 rooms to healthcare workers, the management remains vigilant in improving its cleaning and sanitation protocols for the safety of the staff and frontliners as well.  The hotels placed hand sanitizers at all access points,and other safety precautionary measures are also implemented. Disinfecting stations have been made in hotel entrances and the use of improvised PPE of hotel staff is well visible. <br><br>
    In an interview in ANC with Dr. Oscar Tinio, Comission on Legislation Chair, PH Medical Association, he stated how glad he is, because Hotel Sogo open their doors for them. “ We asked if Hotel Sogo has given us the permission to use their rooms, so that we can house our personnel, because it would be easy for us to keep in touch and be able to report for work. And other hotels are doing the same thing and some of the  hospitals convert some of their floors to dormitories for their personnel so they won’t have to leave the premises any longer.” <br><br>
    Upholding the “so clean…so good” tagline, Hotel Sogo will stay true to its trailblazing nature by providing fellow frontliners a clean and healthy facilities along with excellent hotel services.  <br><br>
    To find out more about this and other Hotel Sogo’s campaigns, visit our website at www.hotelsogo.com or like and follow us on Facebook page @HotelSogoOfficialPage, Twitter and Instagram @hotelsogo, and Youtube account @OfficialHotelSogo.
    ';
    $image = '../assets/image_here.png';
}else if($title == 2){
    $header = 'Hotel Sogo rolls out approved “New Normal” policies in all branches';
    $content = 'Hotel Sogo CEO Reynaldo Malaca announced that the company has prepared its new normal policies to be implemented in all of its branches nationwide in lieu of the announcement of General Community Quarantine (GCQ) and Modified Enhance Community Quarantine (ECQ) in some areas of Luzon.<br><br>

    “With the pandemic at hand, we have adapted quickly to the changes. I’m proud to say that the company foresee and swiftly implemented these safety measures for the welfare of our employees and guests especially the frontliners, OFWs, and seafarer repatriates who are currently staying in our hotel. We wanted them to feel secure and comfortable,” Mr. Malaca said. <br><br>
    
    As part of their “So Clean, So Good, So Safe” campaign under its Sogo So Safe Program, Hotel Sogo showcases its new normal policies via its New Normal Playbook that were sent to different agencies like the Department of Health (DOH), Overseas Workers Welfare Administration (OWWA), and the Department of Tourism (DOT).  <br><br>
    
    “I would like to acknowledge the support and assistance of the DOH, OWWA, and DOT to make our new normal be fully recognized and to be implemented in our hotels. We are grateful that they have trusted us to be their partner of choice in taking care of the OFWs and frontliners in this time of crisis. Indeed, we are one with the government to create a better life with this new normal,” Mr. Malaca added. <br>
    To highlight their new normal, Hotel Sogo adapted the use of Ultraviolet (UV) light, which are modified in cash registers, keycard cases, elevator buttons, and its ceiling, room door handles, as well as in food preparation for an enhanced cleaning and disinfection processes. UVC light will be also used to disinfect the room from bedsheets, cabinets, mirrors, tables, and chairs, and even in bathrooms. <br><br>
    According to studies, the use of UVC lights is highly effective at disinfection as it kills bacteria, germs, and viruses. These UVCs are also less harmful to human skin since they are particularly installed in features like door handles, which are not handled for a long time. <br><br>
    
    Contactless doors and elevator buttons through the use of key chains, and automatic faucets and urinals will also be part of the new norm to avoid the spread of the virus in commonly touched areas. <br><br>
    
    Safety measures such as temperature screening, placement of sanitizers in common areas, and social distancing will still be implemented. Employees are required to wear PPE uniforms, face masks, face shields, gloves, and boots when cleaning. And also, guests are also required to wear a face mask upon entering the hotel. <br><br>
    
    Various medical professionals and LGUs commended Hotel Sogo as they are the first to implement these innovative safety measures in response to the House Bill 6623 “New Normal for the Workplace and Public Spaces Act”. <br><br>
    
    “Maganda siya at informative. You’re the first in doing these. Good job!,” a representative from the Manila City Mayor’s Office shared. <br><br>
    
    “Actually, gusto naming i-adapt siya ng lahat ng hotels dito. [Iyon] ang magiging benchmark para sa lahat ng hotels,” a representative from the Mayor’s Office of Quezon City cited. <br><br>
    
    Hotel Sogo will continue to keep track on the government’s safety protocols and will stay in giving its guests not only a So Clean So Good stay but, also So Safe. <br>
    To find out more about Hotel Sogo, visit its website at www.hotelsogo.com or like and follow us on Facebook page @HotelSogoOfficialPage, Twitter, and Instagram @hotelsogo, and Youtube account @OfficialHotelSogo.
    ';
    $image = '../assets/image_here.png';
}
 

?>

<a href="<?php echo base_url(); ?>news"><button class="btn btn-primary">Go Back</button></a>

<div class="newsPage">
    <div class="row">
        <div class="col-sm-12">
            <h1><?php echo $header; ?></h1>
        </div>
        <div class="col-sm-9">
            <p><?php echo $content; ?></p>
        </div>
        <div class="col-sm-3">
            <img class="d-block img-fluid" src="<?php echo $image; ?>" alt="See More">
            <img class="d-block img-fluid" src="<?php echo $image; ?>" alt="See More">
        </div>
    </div>
</div>


</div>