#Newsifier Test Project

#Api for getting users according to thier id ordered by thier karma score

#Api endpoints : 

#1  /public/api/v1//user/{id}/karma-position 
# get the user by id within a list of 5 max that contains the 2 users lower in karma score than the wanted user and the 2 users higher in karma score than him 
# if there is no users that are higher or lower it will return the user with the exisiting data only 
# example :
# a - user with higher score than user
# b - user with second higher score than user
# c - wanted user with id 
# d - user with second lowest score than user
# e - user with lowest score than user

#2  /public/api/v1//user/create-test-data
# create 100000 test users  with karma scores