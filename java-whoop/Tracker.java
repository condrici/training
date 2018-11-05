import java.io.*;

public class Tracker {
	
	String keyword;
	String searchCountry;
	String searchFrequency;
	int searchVolume;
	
	public Tracker(String skeyword) {
		keyword = skeyword;
	}
	
	public void sFrequency(String sfrequency) {
		searchFrequency = sfrequency;
	}
	
	public void sVolume(int sVolume) {
		searchVolume = sVolume;
	}
	
	public void sCountry(String sCountry) {
		searchCountry = sCountry;
	}
	
	public void printKeyword() {
		System.out.println("Keyword:" + keyword);
		System.out.println("Search Country:" + searchCountry);
		System.out.println("Search Frequency:" + searchFrequency);
		System.out.println("Search Volume:" + searchVolume);
	}
	
}