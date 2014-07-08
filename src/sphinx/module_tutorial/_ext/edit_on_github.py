"""
Sphinx extension to add ReadTheDocs "Edit on GitHub" links
for local rtd theme.
 
Loosely based on https://gist.github.com/mgedmin/6052926#file-sourcelink-html
"""

import os
import warnings


__licence__ = 'BSD (3 clause)'


def html_page_context(app, pagename, templatename, context, doctree):
    if templatename != 'page.html':
        return

    if not app.config.github_repo:
        warnings.warn("github_repo not specified")
        return

    path = os.path.relpath(doctree.get('source'), app.builder.srcdir)

    context['display_github'] = True
    context['github_user'] = app.config.github_user
    context['github_repo'] = app.config.github_repo
    context['github_version'] = app.config.github_version
    context['conf_py_path'] = app.config.conf_py_path


def setup(app):
    app.add_config_value('github_user', '', True)
    app.add_config_value('github_repo', '', True)
    app.add_config_value('github_version', 'master', True)
    app.add_config_value('conf_py_path', '/', True)

    app.connect('html-page-context', html_page_context)