import { Navbar } from "@/components/navbar"
import { HeroSection } from "@/components/hero-section"
import { ArtsSection } from "@/components/arts-section"
import { CategoriesSection } from "@/components/categories-section"
import { AboutSection } from "@/components/about-section"

export default function Home() {
  return (
    <main className="min-h-screen bg-black overflow-hidden">
      {/* Enhanced global gradient background */}
      <div className="fixed inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-purple-900/30 via-black to-blue-900/30 pointer-events-none" />
      
      <Navbar />
      <HeroSection />
      <ArtsSection />
      <CategoriesSection />
      <AboutSection />
     
    </main>
  )
}
