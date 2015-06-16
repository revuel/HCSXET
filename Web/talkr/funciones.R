# # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # 
# Project: FuzzyPruebas                                                       #
#                                                                             #
# File: funciones.R                                                           #
# Date: 14/06/2015                                                            #
# Author: Miguel Revuelta Espinosa; revuel@github                             #
#                                                                             #
# Notes: Testing package FuzzyToolkitUoN                                      #
# # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # 

# --------------------------------------------------------------------------- #
# Dependencies & library initialitation
# --------------------------------------------------------------------------- #
#install.packages('FuzzyToolkitUoN')
if (!'FuzzyToolkitUoN' %in% installed.packages()){
  install.packages('FuzzyToolkitUoN')
} 

library(FuzzyToolkitUoN)

# ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ #
# Development Area
FIS <- tippertest()
png(filename="temp.png", width=500, height=500)
plotMF(FIS, "input", 1)
dev.off()
# ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ #

# args <- commandArgs(TRUE)
# # 
# N <- args[1]
# x <- rnorm(N,0,1)
# # 
# # hist(x, col="lightblue")
# # dev.copy(png, paste("temp", ".png", sep=""), width=700, height=700)
# # dev.off()
# png(filename="temp.png", width=500, height=500)
# hist(x, col="lightblue")
# dev.off()
