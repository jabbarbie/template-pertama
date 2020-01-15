<b:if cond='data:view.isPost'>
  <title>
    <data:view.title/>
  </title>
  <b:elseif cond='data:view.isPage'/>
  <title>
    <data:view.title/>
  </title>
  <b:elseif cond='data:view.isHomepage'/>
  <title>
    <data:blog.title/>
  </title>
  <b:elseif cond='data:view.search.label'/>
  <title>
    <data:blog.pageTitle/>
  </title>
  <b:elseif cond='data:view.search.query'/>
  <title>
    <data:view.search.resultsMessage/>
  </title>
  <b:elseif cond='data:view.search and !data:view.search.label and !data:view.search.query'/>
  <title>
    <data:blog.pageTitle/>
  </title>
  <b:elseif cond='data:view.isArchive'/>
  <title>
    <data:view.archive.rangeMessage/>
  </title>
  <b:elseif cond='data:view.isError'/>
  <title>404 Not Found</title>
  <meta content='noindex, nofollow' name='robots'/>
</b:if>