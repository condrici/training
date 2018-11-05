import java.io.*;

public class TrackerSample {
	
	public static void main(String args[]) {
		
		Tracker firstKw  = new Tracker("best yachts in the world");
		Tracker secondKw = new Tracker("best rings in the world");
		
		firstKw.searchCountry    = "UK";
		firstKw.searchFrequency  = "daily";
		firstKw.searchVolume     = 100;
		firstKw.printKeyword();
		
		secondKw.searchCountry    = "UK";
		secondKw.searchFrequency  = "daily";
		secondKw.searchVolume     = 100;
		secondKw.printKeyword();
		
	}
	
}