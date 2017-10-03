<section id="footer" class="section-padding background-gray font-white">
    <div class="container">
        <div layout="row">
            <div flex>
                <md-button class="md-raised md-primiary" flex ng-href="/category/blog/">Blog</md-button>
            </div>
        </div>
        <div layout="row" layout-xs="column" layout-sm="column">
            <div class="contact" flex>
                <h2>Contact Details</h2>
                <p><a class="with-background" href="mailto:info@jbtotalfitness.co.uk">info@jbtotalfitness.co.uk</a></p>
                <p><a class="with-background" href="tel:07753358387">07753358387</a></p>
                <div class="social" layout="row" layout-align-xs="space-around center"
                     layout-align-sm="space-around center">
                    <div flex="nogrow" class="social-icon social-facebook"><a
                                href="https://www.facebook.com/JBTotalFitness">Facebook</a></div>
                    <div flex="nogrow" class="social-icon social-instagram"><a
                                href="https://instagram.com/jbtotalfitness/">Instagram</a></div>
                    <div flex="nogrow" class="social-icon social-twitter"><a href="https://twitter.com/jbtotalfitness">Twitter</a>
                    </div>
                    <div flex="nogrow" class="social-icon social-youtube"><a
                                href="https://www.youtube.com/user/360fitness1">Youtube</a></div>
                    <div flex="nogrow" class="social-icon social-google"><a
                                href="https://plus.google.com/+JbtotalfitnessUk">Google+</a></div>
                </div>
            </div>
            <div class="map" flex>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1216.6861451042835!2d-1.507369192886651!3d52.41805176100035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48774b95c7e1c943%3A0x4664439cd150be30!2sJB+Total+Fitness!5e0!3m2!1sen!2suk!4v1475328370980"
                        frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="copyright" flex layout="column" layout-gt-sm="row">
            <div flex flex-order="1">
                <p>&copy; JB Total Fitness LTD 2016</p>
                <p>Registered Address: 96 Mayfield Rd, Acocks Green, Birmingham, B27 7TP</p>
                <p>Registered Company No. 08884101</p>
            </div>
            <div flex flex-order="-1" flex-order-gt-sm="2" class="text-right-not-mobile">
                <p><a href="/downloads/JBTF-Terms-and-Conditions.docx">Refunds Policy</a></p>
                <p><a href="/downloads/Data-protection-document-4.pdf">Consumer Data Privacy Policy</a></p>
            </div>
        </div>
    </div>
</section>

@if (!empty(\Canvas\Models\Settings::gaId()))
    @include('canvas::frontend.blog.partials.analytics')
@endif