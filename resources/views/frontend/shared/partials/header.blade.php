<div id="branding">
    <div ng-class="{'branding-scroll': toggleMenuScroll, 'md-whiteframe-4dp': toggleMenuScroll}" fixed-nav-toggle>
        <div class="container">
            <div class="hide-gt-sm">
                <div layout="row" layout-align="space-between center">
                    <h1 flex="nogrow" class="logoBlack">JB Total Fitness</h1>
                    <md-button flex="nogrow" class="md-icon-button md-raised" aria-label="Navigation"
                               ng-click="showMenu = !showMenu; $event.stopPropagation();">
                        <i class="material-icons">&#xE5D2;</i>
                    </md-button>
                </div>
                <div layout="column" layout-align="center center" ng-show="showMenu">
                    <md-button class="nav-item" flex flex-order="1" ng-click="showMenu = false;">
                        <a href="/">Home</a>
                    </md-button>
                    <md-button class="nav-item" flex flex-order="2" ng-click="showMenu = false;">
                        <a href="/programs">Programs</a>
                    </md-button>
                    <md-button class="nav-item" flex flex-order="3" ng-click="showMenu = false;">
                        <a href="/about">About</a>
                    </md-button>
                    <md-button class="nav-item" flex flex-order="4" ng-click="showMenu = false;">
                        <a href="/content">Content</a>
                    </md-button>
                    <md-button class="nav-item" flex flex-order="5" ng-click="showMenu = false;">
                        <a href="/coaches">Coaches</a>
                    </md-button>
                    <md-button class="nav-item" flex flex-order="6" ng-click="showMenu = false;">
                        <a href="/contact">Contact</a>
                    </md-button>
                    <md-button class="nav-item" flex flex-order="7" ng-click="showMenu = false;">
                        <a href="https://jbtotalfitness.mypthub.net/login">Login</a>
                    </md-button>
                    <md-button class="nav-item" flex flex-order="8" ng-click="showMenu = false;">
                        <a href="https://jbtotalfitness.mypthub.net/buy-packages">Signup</a>
                    </md-button>
                </div>
            </div>
            <div layout="row" layout-xs="column" layout-align="center center" class="hide-xs hide-sm">
                <h1 flex="nogrow" flex-order="5" ng-class="{'logoBlack':!whiteMenuItems}">JB Total Fitness</h1>
                <md-button class="nav-item" ng-class="{'font-white': whiteMenuItems && !toggleMenuScroll}" flex
                           flex-order="1" ng-href="/">Home
                </md-button>
                <md-button class="nav-item" ng-class="{'font-white': whiteMenuItems && !toggleMenuScroll}" flex
                           flex-order="2" ng-href="/programs">Programs
                </md-button>
                <md-button class="nav-item" ng-class="{'font-white': whiteMenuItems && !toggleMenuScroll}" flex
                           flex-order="3" ng-href="/about">About
                </md-button>
                <md-button class="nav-item" ng-class="{'font-white': whiteMenuItems && !toggleMenuScroll}" flex
                           flex-order="4" ng-href="/content">Content
                </md-button>
                <md-button class="nav-item" ng-class="{'font-white': whiteMenuItems && !toggleMenuScroll}" flex
                           flex-order="6" ng-href="/coaches">Coaches
                </md-button>
                <md-button class="nav-item" ng-class="{'font-white': whiteMenuItems && !toggleMenuScroll}" flex
                           flex-order="7" ng-href="/contact">Contact
                </md-button>
                <md-button class="nav-item" ng-class="{'font-white': whiteMenuItems && !toggleMenuScroll}" flex
                           flex-order="8" ng-href="https://jbtotalfitness.mypthub.net/login">Login
                </md-button>
                <md-button class="nav-item" ng-class="{'font-white': whiteMenuItems && !toggleMenuScroll}" flex
                           flex-order="9" ng-href="https://jbtotalfitness.mypthub.net/buy-packages">Signup
                </md-button>
            </div>
        </div>
    </div>
</div>