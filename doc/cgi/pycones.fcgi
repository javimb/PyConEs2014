#!/usr/bin/python
from flup.server.fcgi import WSGIServer
from pycones import app
from werkzeug.contrib.fixers import LighttpdCGIRootFix

if __name__ == '__main__':
    WSGIServer(LighttpdCGIRootFix(app)).run()

