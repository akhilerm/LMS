import glob
import os
import shutil
import copy

def generator(video_files):
	temp=copy.copy(video_files)
	for i in range(len(video_files)):
		video_files[i]=(video_files[i])[8:-4]
	thumbs=glob.glob("Content\\thumbs\\*.*")
	for i in range(len(thumbs)):
		thumbs[i]=(thumbs[i])[15:-4]
	s1=set(thumbs)
	s2=set(video_files)
	if len(list(s2-s1)) != 0:
		#thumbnail making start here
		ls=list(s2-s1)
		for i in range(len(ls)):
			file=[s for s in temp if ls[i] in s]
			os.system("ffmpeg -i "+file[0]+" -ss 00:00:14.435 -vframes 1 Content\\thumbs\\"+ls[i]+"_.jpg")
			os.system("ffmpeg -i Content\\thumbs\\"+ls[i]+"_.jpg -vf scale=220:148 Content\\thumbs\\"+ls[i]+".jpg")
			os.system("del Content\\thumbs\\"+ls[i]+"_.jpg")
		#thumbnail making ends here
	return

video_files=glob.glob("Content/*.*")
generator(video_files)