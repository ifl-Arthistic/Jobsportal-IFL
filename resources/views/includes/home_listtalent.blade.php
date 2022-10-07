<div data-testid="skills-list-group" class="container listtalent">
@foreach ($job_categories as $job_category)

   <div data-testid="skills-list-container" class="_2g_ZO6j8  _1cwKlNuP">
    <h2 class="_8hq62nwZ" data-testid="skills-list-title">BestJobs {{$job_category['category']}}</h2>
  
     
      <!-- <ul class="zjL-4_Jq">
         <li class=""><a href="algorithms" data-testid="skill-link" class="   ">Algorithm Developers</a></li>
         <li class=""><a href="angular" data-testid="skill-link" class="   ">Angular Developers</a></li>
         <li class=""><a href="aws" data-testid="skill-link" class="   ">AWS Developers</a></li>
         <li class=""><a href="azure" data-testid="skill-link" class="   ">Azure Developers</a></li>
         <li class=""><a href="big-data" data-testid="skill-link" class="   ">Big Data Architects</a></li>
         <li class=""><a href="blockchain" data-testid="skill-link" class="   ">Blockchain Developers</a></li>
         <li class=""><a href="business-intelligence" data-testid="skill-link" class="   ">Business Intelligence Developers</a></li>
         <li class=""><a href="c" data-testid="skill-link" class="   ">C Developers</a></li>
         <li class=""><a href="computer-vision" data-testid="skill-link" class="   ">Computer Vision Developers</a></li>
         <li class=""><a href="django" data-testid="skill-link" class="   ">Django Developers</a></li>
         <li class=""><a href="docker" data-testid="skill-link" class="   ">Docker Developers</a></li>
         <li class=""><a href="elixir" data-testid="skill-link" class="   ">Elixir Developers</a></li>
         <li class=""><a href="go" data-testid="skill-link" class="   ">Go Engineers</a></li>
         <li class=""><a href="graphql" data-testid="skill-link" class="   ">GraphQL Developers</a></li>
         <li class=""><a href="jenkins" data-testid="skill-link" class="   ">Jenkins Developers</a></li>
         <li class=""><a href="kotlin" data-testid="skill-link" class="   ">Kotlin Developers</a></li>
         <li class=""><a href="kubernetes" data-testid="skill-link" class="   ">Kubernetes Experts</a></li>
         <li class=""><a href="machine-learning" data-testid="skill-link" class="   ">Machine Learning Engineers</a></li>
         <li class=""><a href="magento" data-testid="skill-link" class="   ">Magento Developers</a></li>
         <li class=""><a href="dot-net" data-testid="skill-link" class="   ">.NET Developers</a></li>
         <li class=""><a href="r" data-testid="skill-link" class="   ">R Developers</a></li>
         <li class=""><a href="react-native" data-testid="skill-link" class="   ">React Native Developers</a></li>
         <li class=""><a href="ruby-on-rails" data-testid="skill-link" class="   ">Ruby on Rails Developers</a></li>
         <li class=""><a href="salesforce" data-testid="skill-link" class="   ">Salesforce Developers</a></li>
         <li class=""><a href="sql" data-testid="skill-link" class="   ">SQL Developers</a></li>
         <li class=""><a href="sys-admin" data-testid="skill-link" class="   ">Sys Admins</a></li>
         <li class=""><a href="tableau" data-testid="skill-link" class="   ">Tableau Developers</a></li>
         <li class=""><a href="unreal-engine" data-testid="skill-link" class="   ">Unreal Engine Developers</a></li>
         <li class=""><a href="xamarin" data-testid="skill-link" class="   ">Xamarin Developers</a></li>
         <li class="">
            <a href="/developers" class="_33DCQ6Tb  _2G2JjfI1 _21XVCEp9  ">
               <span class="">View More Freelance&nbsp;Developers&nbsp;</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
               </svg>
            </a>
         </li>
      </ul> -->
      <ul class="zjL-4_Jq">
      @foreach($jobs as $job)
         @if($job['job_category_id'] == $job_category['id'])
            <li class=""><a href="/job/talent/{{$job['title']}}" data-testid="skill-link" class="">{{$job['title']}}</a></li>
         
         @endif
         
      @endforeach
      <li class="">
            <a href="/designers" class="_33DCQ6Tb  ">
               <span class="">View More Freelance&nbsp;Designers</span>
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
               </svg>
            </a>
         </li>
      </ul>
      
   </div>
   <hr>
   @endforeach<!-- 
   <div data-testid="skills-list-container" class="">
      <h2 class="_8hq62nwZ" data-testid="skills-list-title">BestJobs Designers</h2>
      <ul class="zjL-4_Jq">
         <li class=""><a href="designers/adobe" data-testid="skill-link" class="   ">Adobe Creative Suite Experts</a></li>
         <li class=""><a href="designers/agile" data-testid="skill-link" class="   ">Agile Designers</a></li>
         <li class=""><a href="designers/artificial-intelligence" data-testid="skill-link" class="   ">AI Designers</a></li>
         <li class=""><a href="designers/art-direction" data-testid="skill-link" class="   ">Art Direction Experts</a></li>
         <li class=""><a href="designers/augmented-reality" data-testid="skill-link" class="   ">Augmented Reality Designers</a></li>
         <li class=""><a href="designers/axure" data-testid="skill-link" class="   ">Axure Experts</a></li>
         <li class=""><a href="designers/brand" data-testid="skill-link" class="   ">Brand Designers</a></li>
         <li class=""><a href="designers/creative-direction" data-testid="skill-link" class="   ">Creative Directors</a></li>
         <li class=""><a href="designers/dashboard-design" data-testid="skill-link" class="   ">Dashboard Designers</a></li>
         <li class=""><a href="designers/digital-product-design" data-testid="skill-link" class="   ">Digital Product Designers</a></li>
         <li class=""><a href="designers/e-commerce" data-testid="skill-link" class="   ">E-Commerce Website Designers</a></li>
         <li class=""><a href="designers/front-end" data-testid="skill-link" class="   ">Front End Designers</a></li>
         <li class=""><a href="designers/full-stack" data-testid="skill-link" class="   ">Full Stack Designers</a></li>
         <li class=""><a href="designers/ia" data-testid="skill-link" class="   ">Information Architecture Experts</a></li>
         <li class=""><a href="designers/interactive" data-testid="skill-link" class="   ">Interactive Designers</a></li>
         <li class=""><a href="designers/mobile" data-testid="skill-link" class="   ">Mobile App Designers</a></li>
         <li class=""><a href="designers/mockups" data-testid="skill-link" class="   ">Mockup Designers</a></li>
         <li class=""><a href="designers/presentation-design" data-testid="skill-link" class="   ">Presentation Designers</a></li>
         <li class=""><a href="designers/prototype" data-testid="skill-link" class="   ">Prototype Designers</a></li>
         <li class=""><a href="designers/prototyping" data-testid="skill-link" class="   ">Prototyping Experts</a></li>
         <li class=""><a href="designers/saas" data-testid="skill-link" class="   ">SaaS Designers</a></li>
         <li class=""><a href="designers/sketch" data-testid="skill-link" class="   ">Sketch Experts</a></li>
         <li class=""><a href="designers/squarespace" data-testid="skill-link" class="   ">Squarespace Designers</a></li>
         <li class=""><a href="designers/usability" data-testid="skill-link" class="   ">Usability Designers</a></li>
         <li class=""><a href="designers/user-flows" data-testid="skill-link" class="   ">User Flow Designers</a></li>
         <li class=""><a href="designers/user-research" data-testid="skill-link" class="   ">User Research Designers</a></li>
         <li class=""><a href="designers/virtual-reality" data-testid="skill-link" class="   ">Virtual Reality Designers</a></li>
         <li class=""><a href="designers/visual" data-testid="skill-link" class="   ">Visual Designers</a></li>
         <li class=""><a href="designers/wireframing" data-testid="skill-link" class="   ">Wireframing Experts</a></li>
         <li class="">
            <a href="/designers" class="_33DCQ6Tb  ">
               <span class="">View More Freelance&nbsp;Designers</span>
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
               </svg>
            </a>
         </li>
      </ul>
   </div>
   <hr>
   <div data-testid="skills-list-container" class="">
      <h2 class="_8hq62nwZ" data-testid="skills-list-title">BestJobs Finance Experts</h2>
      <ul class="zjL-4_Jqq">
         <li class=""><a href="finance/blockchain" data-testid="skill-link" class="   ">Blockchain Consultants</a></li>
         <li class=""><a href="finance/business-management-consultants" data-testid="skill-link" class="   ">Business Management Consultants</a></li>
         <li class=""><a href="finance/business-plan-consultants" data-testid="skill-link" class="   ">Business Plan Consultants</a></li>
         <li class=""><a href="finance/business-process-optimization" data-testid="skill-link" class="   ">Business Process Optimization Consultants</a></li>
         <li class=""><a href="finance/cpa" data-testid="skill-link" class="   ">Certified Public Accountants (CPA)</a></li>
         <li class=""><a href="finance/cost-transformation-consultants" data-testid="skill-link" class="   ">Cost Transformation Consultants</a></li>
         <li class=""><a href="finance/economic-development-consulting" data-testid="skill-link" class="   ">Economic Development Consultants</a></li>
         <li class=""><a href="finance/equity-research-analysts" data-testid="skill-link" class="   ">Equity Research Analysts</a></li>
         <li class=""><a href="finance/excel-experts" data-testid="skill-link" class="   ">Excel Experts</a></li>
         <li class=""><a href="finance/financial-benchmarking" data-testid="skill-link" class="   ">Financial Benchmarking Consultants</a></li>
         <li class=""><a href="finance/financial-forecasting" data-testid="skill-link" class="   ">Financial Forecasting Experts</a></li>
         <li class=""><a href="finance/financial-modeling" data-testid="skill-link" class="   ">Financial Modeling Consultants</a></li>
         <li class=""><a href="finance/financial-writers" data-testid="skill-link" class="   ">Financial Writers</a></li>
         <li class=""><a href="finance/fintech" data-testid="skill-link" class="   ">Fintech Consultants</a></li>
         <li class=""><a href="finance/financial-planning-and-analysis" data-testid="skill-link" class="   ">FP&amp;A Managers</a></li>
         <li class=""><a href="finance/fractional-cfo" data-testid="skill-link" class="   ">Fractional CFOs</a></li>
         <li class=""><a href="finance/fundraising" data-testid="skill-link" class="   ">Fundraising Consultants</a></li>
         <li class=""><a href="finance/fx-consultants" data-testid="skill-link" class="   ">FX Consultants</a></li>
         <li class=""><a href="finance/growth-strategy" data-testid="skill-link" class="   ">Growth Strategy Consultants Experts</a></li>
         <li class=""><a href="finance/business-planning-consultants" data-testid="skill-link" class="   ">Integrated Business Planning Consultants</a></li>
         <li class=""><a href="finance/interim-cfos" data-testid="skill-link" class="   ">Interim CFOs</a></li>
         <li class=""><a href="finance/investment-managers" data-testid="skill-link" class="   ">Investment Managers</a></li>
         <li class=""><a href="finance/investment-thesis-consultants" data-testid="skill-link" class="   ">Investment Thesis Consultants</a></li>
         <li class=""><a href="finance/investor-relations-consultants" data-testid="skill-link" class="   ">Investor Relations Consultants</a></li>
         <li class=""><a href="finance/mergers-and-acquisitions" data-testid="skill-link" class="   ">M&amp;A Consultants</a></li>
         <li class=""><a href="finance/market-sizing" data-testid="skill-link" class="   ">Market Sizing Experts</a></li>
         <li class=""><a href="finance/pitch-deck-consultants" data-testid="skill-link" class="   ">Pitch Deck Consultants</a></li>
         <li class=""><a href="finance/private-equity-consultants" data-testid="skill-link" class="   ">Private Equity Consultants</a></li>
         <li class=""><a href="finance/procurement-consultants" data-testid="skill-link" class="   ">Procurement Consultants</a></li>
         <li class=""><a href="finance/profitability-analysis" data-testid="skill-link" class="   ">Profitability Analysis Experts</a></li>
         <li class=""><a href="finance/real-estate" data-testid="skill-link" class="   ">Real Estate Experts</a></li>
         <li class=""><a href="finance/restructuring-consultants" data-testid="skill-link" class="   ">Restructuring Consultants</a></li>
         <li class=""><a href="finance/risk-management-consultants" data-testid="skill-link" class="   ">Risk Management Consultants</a></li>
         <li class=""><a href="finance/small-business-consultants" data-testid="skill-link" class="   ">Small Business Consultants Experts</a></li>
         <li class=""><a href="finance/supply-chain-management-scm" data-testid="skill-link" class="   ">Supply Chain Management Consultants</a></li>
         <li class=""><a href="finance/valuation" data-testid="skill-link" class="   ">Valuation Specialists</a></li>
         <li class=""><a href="finance/venture-capital-consultants" data-testid="skill-link" class="   ">Venture Capital Consultants</a></li>
         <li class=""><a href="finance/virtual-cfo" data-testid="skill-link" class="   ">Virtual CFOs</a></li>
         <li class=""><a href="finance/xero" data-testid="skill-link" class="   ">Xero Experts</a></li>
         <li class="">
            <a href="/finance" class="_33DCQ6Tb ">
               <span class="">View More Freelance Finance&nbsp;Experts</span>
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
               </svg>
            </a>
         </li>
      </ul>
   </div>
   <hr>
   <div data-testid="skills-list-container" class="">
      <h2 class="_8hq62nwZ" data-testid="skills-list-title">BestJobs Project Managers</h2>
      <ul class="zjL-4_Jq">
         <li class=""><a href="project-managers/asana" data-testid="skill-link" class="   ">Asana Experts</a></li>
         <li class=""><a href="project-managers/blockchain" data-testid="skill-link" class="   ">Blockchain Project Managers</a></li>
         <li class=""><a href="project-managers/business-delivery-manager" data-testid="skill-link" class="   ">Business Delivery Managers</a></li>
         <li class=""><a href="project-managers/business-transformation-program-manager" data-testid="skill-link" class="   ">Business Transformation Program Managers</a></li>
         <li class=""><a href="project-managers/client-delivery-manager" data-testid="skill-link" class="   ">Client Delivery Managers</a></li>
         <li class=""><a href="project-managers/digital" data-testid="skill-link" class="   ">Digital Project Managers</a></li>
         <li class=""><a href="project-managers/digital-delivery-manager" data-testid="skill-link" class="   ">Digital Delivery Managers</a></li>
         <li class=""><a href="project-managers/digital-transformation-program-managers" data-testid="skill-link" class="   ">Digital Transformation Program Managers</a></li>
         <li class=""><a href="project-managers/ecommerce" data-testid="skill-link" class="   ">eCommerce Project Managers</a></li>
         <li class=""><a href="project-managers/enterprise-coaching" data-testid="skill-link" class="   ">Enterprise Coaches</a></li>
         <li class=""><a href="project-managers/jira-administrators" data-testid="skill-link" class="   ">JIRA Administrators</a></li>
         <li class=""><a href="project-managers/kanban" data-testid="skill-link" class="   ">Kanban Project Managers</a></li>
         <li class=""><a href="project-managers/lean" data-testid="skill-link" class="   ">Lean Project Managers</a></li>
         <li class=""><a href="project-managers/lms-admins" data-testid="skill-link" class="   ">Learning Management System Administrators</a></li>
         <li class=""><a href="project-managers/mobile" data-testid="skill-link" class="   ">Mobile Project Managers</a></li>
         <li class=""><a href="project-managers/pmi" data-testid="skill-link" class="   ">PMI Project Managers</a></li>
         <li class=""><a href="project-managers/pmo" data-testid="skill-link" class="   ">PMO Specialists</a></li>
         <li class=""><a href="project-managers/pmp" data-testid="skill-link" class="   ">PMP Project Managers</a></li>
         <li class=""><a href="project-managers/prince-2" data-testid="skill-link" class="   ">Prince2 Experts</a></li>
         <li class=""><a href="project-managers/program-manager" data-testid="skill-link" class="   ">Program Managers</a></li>
         <li class=""><a href="project-managers/scrum" data-testid="skill-link" class="   ">Scrum Project Managers</a></li>
         <li class=""><a href="project-managers/scrum-coach" data-testid="skill-link" class="   ">Scrum Coaches</a></li>
         <li class=""><a href="project-managers/scrum-master" data-testid="skill-link" class="   ">Scrum Masters</a></li>
         <li class=""><a href="project-managers/software" data-testid="skill-link" class="   ">Software Project Managers</a></li>
         <li class=""><a href="project-managers/software-development" data-testid="skill-link" class="   ">Software Development Project Managers</a></li>
         <li class=""><a href="project-managers/technical-business-analyst" data-testid="skill-link" class="   ">Technical Business Analysts</a></li>
         <li class=""><a href="project-managers/transformation" data-testid="skill-link" class="   ">Transformation Project Managers</a></li>
         <li class=""><a href="project-managers/waterfall" data-testid="skill-link" class="   ">Waterfall Project Managers</a></li>
         <li class=""><a href="project-managers/web" data-testid="skill-link" class="   ">Web Project Managers</a></li>
         <li class="">
            <a href="/project-managers" class="_33DCQ6Tb">
               <span class="">View More Freelance Project&nbsp;Managers</span>
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
               </svg>
            </a>
         </li>
      </ul>
   </div>
   <hr>
   <div data-testid="skills-list-container" class="">
      <h2 class="_8hq62nwZ" data-testid="skills-list-title">BestJobs Product Managers</h2>
      <ul class="zjL-4_Jq">
         <li class=""><a href="product-managers/artificial-intelligence" data-testid="skill-link" class="   ">Artificial Intelligence Product Managers</a></li>
         <li class=""><a href="product-managers/blockchain" data-testid="skill-link" class="   ">Blockchain Product Managers</a></li>
         <li class=""><a href="product-managers/business-systems-analysts" data-testid="skill-link" class="   ">Business Systems Analysts</a></li>
         <li class=""><a href="product-managers/cloud" data-testid="skill-link" class="   ">Cloud Product Managers</a></li>
         <li class=""><a href="product-managers/data-science" data-testid="skill-link" class="   ">Data Science Product Managers</a></li>
         <li class=""><a href="product-managers/digital-marketing" data-testid="skill-link" class="   ">Digital Marketing Product Managers</a></li>
         <li class=""><a href="product-managers/digital" data-testid="skill-link" class="   ">Digital Product Managers</a></li>
         <li class=""><a href="product-managers/director-of-product" data-testid="skill-link" class="   ">Directors of Product</a></li>
         <li class=""><a href="product-managers/ecommerce" data-testid="skill-link" class="   ">eCommerce Product Managers</a></li>
         <li class=""><a href="product-managers/enterprise" data-testid="skill-link" class="   ">Enterprise Product Managers</a></li>
         <li class=""><a href="product-managers/erp" data-testid="skill-link" class="   ">Enterprise Resource Planning Product Managers</a></li>
         <li class=""><a href="product-managers/freelance" data-testid="skill-link" class="   ">Freelance Product Managers</a></li>
         <li class=""><a href="product-managers/interim-cpo-a" data-testid="skill-link" class="   ">Interim CPOs</a></li>
         <li class=""><a href="product-managers/jira" data-testid="skill-link" class="   ">JIRA Product Managers</a></li>
         <li class=""><a href="product-managers/kanban" data-testid="skill-link" class="   ">Kanban Product Managers</a></li>
         <li class=""><a href="product-managers/lean" data-testid="skill-link" class="   ">Lean Product Managers</a></li>
         <li class=""><a href="product-managers/mobile" data-testid="skill-link" class="   ">Mobile Product Managers</a></li>
         <li class=""><a href="product-managers/product-consultant" data-testid="skill-link" class="   ">Product Consultants</a></li>
         <li class=""><a href="product-managers/product-development-managers" data-testid="skill-link" class="   ">Product Development Managers</a></li>
         <li class=""><a href="product-managers/product-owner" data-testid="skill-link" class="   ">Product Owners</a></li>
         <li class=""><a href="product-managers/product-portfolio-manager" data-testid="skill-link" class="   ">Product Portfolio Managers</a></li>
         <li class=""><a href="product-managers/product-strategy-consultant" data-testid="skill-link" class="   ">Product Strategy Consultants</a></li>
         <li class=""><a href="product-managers/product-tour-consultant" data-testid="skill-link" class="   ">Product Tour Consultants</a></li>
         <li class=""><a href="product-managers/rpa" data-testid="skill-link" class="   ">Robotic Process Automation Product Managers</a></li>
         <li class=""><a href="product-managers/robotics" data-testid="skill-link" class="   ">Robotics Product Managers</a></li>
         <li class=""><a href="product-managers/saas" data-testid="skill-link" class="   ">SaaS Product Managers</a></li>
         <li class=""><a href="product-managers/salesforce" data-testid="skill-link" class="   ">Salesforce Product Managers</a></li>
         <li class=""><a href="product-managers/scrum-product-owner-contractor" data-testid="skill-link" class="   ">Scrum Product Owner Contractors</a></li>
         <li class=""><a href="product-managers/web" data-testid="skill-link" class="   ">Web Product Managers</a></li>
         <li class="">
            <a href="/product-managers" class="_33DCQ6Tb">
               <span class="">View More Freelance Product&nbsp;Managers</span>
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
               </svg>
            </a>
         </li>
      </ul>
   </div>
   <hr> -->
</div>